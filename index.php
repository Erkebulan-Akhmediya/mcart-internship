<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"official", 
	array(
		"NAME" => GetMessage("T_IBLOCK_DESC_LIST"),
		"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_DESC"),
		"ICON" => "/images/news_list.gif",
		"SORT" => "20",
		"CACHE_PATH" => "Y",
		"PATH" => array(
			"ID" => "content",
			"CHILD" => array(
				"ID" => "news",
				"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
				"SORT" => "10",
				"CHILD" => array(
					"ID" => "news_cmpx",
				),
			),
		),
		"COMPONENT_TEMPLATE" => "official",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
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
		"IBLOCK_TYPE" => "announcements",
		"IBLOCKS" => array(
		),
		"NEWS_COUNT" => "9",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);
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