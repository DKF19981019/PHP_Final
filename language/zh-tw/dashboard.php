<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
if (empty($Lang) || !is_array($Lang))
	$Lang = array();

$Lang = array_merge($Lang, array(
	'Basic_Settings' => '一般設定',
	'Page_Settings' => '頁面設定',
	'Advanced_Settings' => '進階設定',
	'Refresh_Cache' => '更新快取',

	'Forum_Name' => '討論區名稱',
	'Forum_Descriptions' => '討論區描述<br /><br />拿給搜尋引擎看的<br />150 字元以內',

	'Page_Show' => '每頁顯示',
	'Page_Topics' => '個討論串',

	'Topic_Show' => '每個討論串顯示',
	'Topic_Posts' => '條回覆',

	'Topic_Max' => '每個討論串最多',
	'Topic_Max_Tags' => '個標籤',

	'Tag_Max' => '單個標籤最多',
	'Tag_Max_Chars' => '個字元',

	'Post_Max' => '每個貼文最多',
	'Post_Max_Chars' => '個字元',

	'Save' => '儲存設定',

	'Html_Between_Head' => '&lt;Head&gt;標籤之間的內容',
	'Html_Before_Body' => '&lt;/Body&gt;標籤之前的內容<br />一般放置統計用代碼',
	'Html_SiderBar' => '資訊列的內容',

	'jQuery_CDN' => 'jQuery庫網址',
	'Main_Domainname' => '主站桌面網域名稱',
	'Mobile_Domainname' => '行動版網域名稱',
	'API_Domainname' => '用戶端 API 網域名稱',

	'Push_Connection_Timeout_Period' => '推送超時時間<br />(如果你不知道這是什麼請不要修改)',
	'SMTP_Host' => 'SMTP 主機名稱',
	'SMTP_Port' => 'SMTP 埠',
	'SMTP_Auth' => 'SMTP 認證',
	'SMTP_Username' => '郵箱地址',
	'SMTP_Password' => '郵箱密碼',

	'Oauth_Settings' => 'oAuth設定',
	'App_Key' => 'App Key',
	'App_Secret' => 'App Secret',
	'Callback_URL' => '回檔地址',

	'Refresh_Cache_Notice' => '更新快取的操作可能會比較久，請耐心等待<br />倘若資料正確，則無清除快取之必要',
	'Refresh_All_Cache' => '更新全站快取',

	'Successfully_Refreshed' => '快取更新成功',
	'Basic_Settings_Successfully_Saved' => '一般設定修改成功，{{NewConfig}} 項已修改',
	'Page_Settings_Successfully_Saved' => '頁面設定修改成功，{{NewConfig}} 項已修改',
	'Oauth_Settings_Successfully_Saved' => 'oAuth設定修改成功',
	'Advanced_Settings_Successfully_Saved' => '進階設定修改成功，{{NewConfig}} 項已修改',
	));
