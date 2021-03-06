<?php
class ResourceModel extends Model
{
   public function addResourceType($data)
   {
      // die("resource type add model called");
      $this->insert('resources', ['name' => $data['name']]);
   }

   public function getCountsOfAllResources()
   {
      // TODO: check if okay with new db changes 
      $results = $this->getResultSet("resources", ["resourceID", "quantity"]);
      return $results;
   }

   public function addPurchaseDetails($data)
   {
      $NoOfResources = $data['quantity'];
      $ResourceID = $data['nameSelected'];
      for ($x = 1; $x <= $NoOfResources; $x++)
      {
         $this->insert('purchaserecords', ['resourceID' => $ResourceID, 'manufacturer' => $data['manufacturer'], 'modelNo' => $data['modelNo'], 'warrantyExpDate' => $data['warrantyExpDate'], 'price' => $data['price'], 'purchaseDate' => $data['purchaseDate']]);
      }
   }

   public function updatePurchaseDetails($data)
   {
      //Define relevant data in to variables
      $purchaseID = $data['purchaseID'];
       
      $this->update('purchaserecords', ['manufacturer' => $data['manufacturer'], 'modelNo' => $data['modelNo'], 'warrantyExpDate' => $data['warrantyExpDate'], 'price' => $data['price'], 'purchaseDate' => $data['purchaseDate']], ['purchaseID' => $purchaseID]);
      

     
   }

   //-------------------------------------- Start -----------------------------------------------------------//
   //---- codes related to updating the resource count when removing and adding resources to the system ----// 
   //------------------------------------------------------------------------------------------------------//
   public function updateResourceQuantityAfterAddResources($data)
   {
      $ResourceID = $data['nameSelected'];
      // Get the current total resource count from resources table
      $currentQuantity = $this->getSingle('resources', ['quantity'], ['resourceID' => $ResourceID]);
      // Calcultate the total resource count by adding one for resources count
      $totalQuantity = (int)$data['quantity'] + $currentQuantity->quantity;
      $result1 = $this->update('resources', ['quantity' => $totalQuantity], ['resourceID' => $ResourceID]);
   }

   public function updateResourceQuantityAfterRemoveResources($ResourceID)
   {
      // Get the current total resource count from resources table
      $currentQuantity = $this->getSingle('resources', ['quantity'], ['resourceID' => $ResourceID]);

      // Calcultate the resource count by redusing the removed resource
      $totalQuantity =  (int)$currentQuantity->quantity - 1;
      $this->update('resources', ['quantity' => $totalQuantity], ['resourceID' => $ResourceID]);
   }

   //-------------------------------------- End -------------------------------------------------------------//
   //---- codes related to updating the resource count when removing and adding resources to the system ----// 
   //------------------------------------------------------------------------------------------------------//

   public function getAllRsourceTypeDetails()
   {
      $results = $this->getResultSet('resources', ['name', 'resourceID'], null);
      return $results;
   }

   public function getAllResourcesWithFilters($resourceName,$resourceID)
   {
      $conditions = array(); 
 
      // Extract specially defined conditions to a separate array 
      // Note that both tableName and columnName are used as the keys 
      if ($resourceName != "all") $conditions["resources.name"] = $resourceName;
      if ($resourceID != "all") $conditions["resources.resourceID"] = $resourceID;

      $preparedConditions = array();
      $dataToBind = array();

      foreach ($conditions as $column => $value)
      {
         $colName = explode(".", $column, 2)[1]; // Only taking the column name for binding (discards tableName)
         array_push($preparedConditions, "$column LIKE :$colName");
         $dataToBind[":$colName"] = '%'.$value.'%';
      }

      $consditionsString = implode(" AND ", $preparedConditions); 

      $SQLstatement =
         "SELECT * FROM resources ";

      // Appending conditions string
      if (!empty($conditions)) $SQLstatement .= " WHERE $consditionsString";

      $results = $this->customQuery($SQLstatement,  $dataToBind);
      return $results;
   }

   // public function getPurchaseDetailsByResourceID($resourceID)
   // {

   //    $results = $this->getResultSet('purchaserecords', '*',  ['resourceID' => $resourceID]);
   //    return $results;
   // }
   public function getPurchaseDetailsByResourceIDWithFilters($resourceID,$manufacturerName)
   {

      $SQLstatement =
      "SELECT * FROM purchaserecords  WHERE resourceID = $resourceID ";

      // Remove spaces, otherwise sql query doesnt work
      $string = "'$manufacturerName%'";
      $string= str_replace(' ', '', $string);

      if ($manufacturerName != "all") $SQLstatement .= " AND manufacturer LIKE $string ";
      $results = $this->customQuery($SQLstatement,  null);
      return $results;
      
   }

   public function removeResourcePurchaseRecord($purchaseID) //details
   {
      $this->update('purchaserecords', ['status' => 0], ["purchaseID" => $purchaseID]);
   }

   public function getRsourcePurchaseDetailsByPurchaseID($purchaseID)
   {
      $results = $this->getSingle('purchaserecords', '*',  ['purchaseID' => $purchaseID]);
      return $results;
   }
   public function getRsourceTypeByResourceID($resourceID)
   {
      $results = $this->getSingle('resources', '*',  ['resourceID' => $resourceID]);
      return $results;
   }

}
