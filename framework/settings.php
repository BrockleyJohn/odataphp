[Data service Url]
/uri=<?php echo EASIFY_SERVICE_LOCATION; ?>

[Out Directory]
/out=<?php echo dirname(__FILE__); ?>/app/Easify_API_Proxy.php

[Auth Information]
/auth=windows
/u=<?php echo EASIFY_API_USERNAME; ?>
;Note that issuer key should be inside double quotes as it contain '=' symbol
/p="<?php echo EASIFY_API_PASSWORD; ?>"

;/sn=wcfdataservice

;/at=<?php echo EASIFY_SERVICE_LOCATION; ?>

 