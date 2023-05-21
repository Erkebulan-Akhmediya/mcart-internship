<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"NAME" => GetMessage("T_IBLOCK_DESC_LINE"),
		"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LINE_DESC"),
		"ICON" => "/images/news_line.gif",
		"SORT" => "10",
		"CACHE_PATH" => "Y",
		"PATH" => array(
			"ID" => "content",
			"CHILD" => array(
				"ID" => "news",
				"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
				"SORT" => "10",
			),
		),
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	),
	false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>