<?php
include(__DIR__ . '/common.php');
header("Content-Type: text/xml");
//https://developer.mozilla.org/en-US/docs/Creating_MozSearch_plugins
?><?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">
	<ShortName><?php echo mb_substr($Config['SiteName'], 0, 15, 'utf-8'); ?></ShortName>
	<Description><?php echo mb_substr($Config['SiteDesc'], 0, 150, 'utf-8'); ?></Description>
	<InputEncoding>UTF-8</InputEncoding>
	<Image width="16" height="16" type="image/x-icon"><?php echo 'http://' . $_SERVER['HTTP_HOST'].$Config['WebsitePath']; ?>static/img/favicon.ico</Image>
	<Url type="text/html" method="GET" template="<?php echo 'http://' . $_SERVER['HTTP_HOST'].$Config['WebsitePath']; ?>/search/{searchTerms}" />
</OpenSearchDescription>