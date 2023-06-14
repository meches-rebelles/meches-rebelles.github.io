<?php

class VerifIP {
    public function verif() {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $browserInfo = get_browser($userAgent);
        $ips_ban = (new IP)->getAllIPs();
        $ip_client = $_SERVER['REMOTE_ADDR'];

        if (!empty($ips_ban) && in_array($ip_client, array_column($ips_ban, 'ip'))) {
            return false;
        }

        if ($browserInfo->crawler) {
            (new IP)->setIPBan($ip_client);
            return false;
        }

        return true;
    }
}