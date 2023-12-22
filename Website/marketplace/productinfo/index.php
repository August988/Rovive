<?php
// DO NOT EDIT ANYTHING HERE. THESE ARE 100% IMPORTANT FOR THE JSONS TO FULLY LOAD.

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://www.rovive.pro');
header('Access-Control-Allow-Credentials: true');

// marketplace stuff. yeah

// also short reminder that meditation#3625 did marketplace/productinfo and i'm just rewriting it cause i hate fake jsons

$AssetId = 1;
$Name = "Placeholder";
$Desc = "This is a placeholder asset!";
$Type = 1;
$Creator = array(
    "Id" => 1,
    "Name" => "someone",
    "CreatorType" => "Admin",
    "CreatorTargetId" => 1,
);
$Created = "2006-09-28T01:09:47.077Z";
$Updated = "2006-09-28T01:09:47.077Z";
$PriceInRobux = true;
$PriceInTickets = false;
$Sales = 0;
$IsNew = false;
$IsForSale = true;
$IsPublicDomain = false;
$IsLimited = array(
  "Enabled" => false,
  "Unique" => false,
); // do it like IsLimited and IsLimitedUnique
$Remaining = false;
$MinimumMembershipLevel = 0;
$ContentRatingTypeId = 0;

$ProductInfo = array(
  "AssetId" => $AssetId,
  "ProductId" => $AssetId,
  "Name" => $Name,
  "Description" => $Desc,
  "AssetTypeId" => $Type,
  "Creator" => $Creator,
  "IconImageAssetId" => $AssetId,
  "Created" => $Created,
  "Updated" => $Updated,
  "PriceInRobux" => $PriceInRobux,
  "PriceInTickets" => $PriceInTickets,
  "Sales" => $Sales,
  "IsNew" => $IsNew,
  "IsForSale" => $IsForSale,
  "IsPublicDomain" => $IsPublicDomain,
  "IsLimited" => $IsLimited['Enabled'],
  "IsLimitedUnique" => $IsLimited['Unique'],
  "Remaining" => $Remaining,
  "MinimumMembershipLevel" => $MinimumMembershipLevel,
  "ContentRatingTypeId" => $ContentRatingTypeId,
);

echo json_encode($ProductInfo);