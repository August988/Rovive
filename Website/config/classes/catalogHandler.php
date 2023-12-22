<?php

class CatalogHandler
{

    public function getCatalogData(array $params): string
    {
        $category = isset($params['Category']) ? (int)$params['Category'] : (int)$params['Direction'];
        $pageNumber = isset($params['PageNumber']) ? intval($params['PageNumber']) : 0;

        $perPage = 30;

        $params["Offset"] = (($pageNumber-1) * $perPage);
        $params["PerPage"] = $perPage;


        $stmt = $this->buildPreparedStatement($category, $params);

        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $catalogData = [
            "Items" => [],
            "TotalResults" => count($rows),
            "ResultsPerPage" => 30,
            "Keyword" => $params['Keyword'],
            "CreatorName" => null,
            "IsCreatorAGroup" => false,
            "IsAlternateResult" => false,
            "IsValidCreatorName" => true,
            "PageHash" => "1",
            "PageNumber" => ($pageNumber == 0) ? 1 : $pageNumber
        ];

        foreach ($rows as $row) {
            $item = $this->buildItemData($row);

            $catalogData["Items"][] = $item;
        }

        return json_encode($catalogData);
    }

    private function buildPreparedStatement(int $Category, array $params): PDOStatement
    {
        global $pdo;

        $KeywordSearch = "";

        if (isset($params['Keyword']) && !empty($params['Keyword'])) {
            $Keyword = filter_var($params['Keyword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_NO_ENCODE_QUOTES);
            $KeywordSearch = "AND lower(`name`) LIKE CONCAT(LOWER('%" . $Keyword . "%')) ";
        }

        if ($params['IncludeNotForSale'] !== "true") {
            $KeywordSearch .= "AND offsale='0' ";
        }


        if ($Category === 0 && (!isset($params['Subcategory']) || $params['Subcategory'] == "0")) {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 0 && $params['Subcategory'] === "19") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Hat' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 0 && $params['Subcategory'] === "38") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Animation' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 0 && $params['Subcategory'] === "10") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Face' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 0 && $params['Subcategory'] === "5") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 0 && $params['Subcategory'] === "37") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 1 && !isset($params['Subcategory'])) {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 2 && (isset($params['Direction']) || (!isset($params['Direction']) && $params['Subcategory'] === "2"))) {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 2 && $params['Subcategory'] === "19") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `limited` = '1' AND `type2` = 'Hat' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 2 && $params['Subcategory'] === "10") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `limited` = '1' AND `type2` = 'Face' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 2 && $params['Subcategory'] === "5") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `limited` = '1' AND `type2` = 'Gear' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 3 && $params['Subcategory'] === "3") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND (`type2` = 'Shirt' OR `type2` = 'TShirt' OR `type2` = 'Pants' OR `type2` = 'Package') $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 3 && $params['Subcategory'] === "12") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Shirt' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 3 && $params['Subcategory'] === "13") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'TShirt' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 3 && $params['Subcategory'] === "14") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Pants' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 3 && $params['Subcategory'] === "37") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Package' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 4 && $params['Subcategory'] === "4") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND (`type2` = 'Package' OR `type2` = 'Head' OR `type2` = 'Face') $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 4 && $params['Subcategory'] === "15") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Head' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 4 && $params['Subcategory'] === "10") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Face' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 4 && $params['Subcategory'] === "37") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Package' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && !isset($params['Subcategory'])) {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "8") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Building' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "3") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Explosives' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "1") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Melee' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "6") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Musical' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "5") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Navigation' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "4") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Power ups' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "2") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Ranged' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "7") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Social' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 5 && $params['Gears'] === "7") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Gear' AND `GearType` = 'Transport' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 11 && $params['Subcategory'] === "19") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Hat' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 11 && $params['Subcategory'] === "9") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Hat' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        } elseif ($Category === 12 && $params['Subcategory'] === "38") {
            $stmt = $pdo->prepare("SELECT * FROM library WHERE `type` = 'item' AND `type2` = 'Animation' $KeywordSearch ORDER BY sold DESC LIMIT :offset , :perpage");
        }

        $stmt->bindParam(':offset', $params['Offset'], PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $params['PerPage'], PDO::PARAM_INT);

        return $stmt;
    }


    private function buildItemData($row)
    {
        $Text = "";
        if ($row["price"] == 0) {
            $IsFree = true;
            $Text = "Free";
        } else {
            $IsFree = false;
        }
        if ($row["limited"] == 1) {
            $CssTag = "limited";
            $RestrictionIconCss = true;
        } elseif ($row["limited"] == 2) {
            $CssTag = "limited-unique";
            $RestrictionIconCss = true;
        } else {
            $CssTag = "";
            $RestrictionIconCss = false;
        }

        return array(
            "ItemTargetId" => $row['id'],
            "ItemType" => 1,
            "AssetId" => $row['id'],
            "Name" => $row['name'],
            "AbsoluteUrl" => "https://www.rovive.pro/library/?id=" . $row['id'] . "",
            "Price" => $row['price'],
            "BestPrice" => null,
            "Remaining" => null,
            "HasSecondaryInfo" => false,
            "NoPriceText" => $Text,
            "IsFree" => $IsFree,
            "Creator" => $row['creatorId'],
            "AssetRestrictionIcon" => array(
                "TooltipText" => null,
                "CssTag" => $CssTag,
                "LoadAssetRestrictionIconCss" => $RestrictionIconCss,
                "HasTooltip" => false
            ),
            "AssetStatusIcon" => array(),
            "Thumbnail" => array(
                "Final" => true,
                "Url" => "https://www.rovive.pro/img/GuiImagePlaceholder.png",
                "RetryUrl" => "",
                "IsApproved" => true
            )
        );
    }
}
