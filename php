<?php
//	Denisoft from IPTVin.Ru
preg_match("/token=(.{20,})\"/", file_get_contents("http://token.stb.md/api/Flussonic/stream/PROTV_CHISINAU_H264/metadata.json"), $out);
file_put_contents("starnet-md-ok.m3u", str_replace("=", "=" . $out[1], file_get_contents("starnet-md.m3u")));
echo "OK, Ready!";
?>
