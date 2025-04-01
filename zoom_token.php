<?php
function getZoomAccessToken() {
    $account_id ='QpjwU_o1TcSgaB6m1ItZIg';
    $client_id = 'bdZqMXOhQBq7clIuyDfYA';
    $client_secret = 'nf5AFgXqy4bj7AMBbH5gjE8fhsCxivCd';

    $url = "https://zoom.us/oauth/token";
    $data = [
        'grant_type' => 'account_credentials',
        'account_id' => $account_id
    ];

    $headers = [
        "Authorization: Basic " . base64_encode("$client_id:$client_secret"),
        "Content-Type: application/x-www-form-urlencoded"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    
    if (isset($result['access_token'])) {
        return $result['access_token'];
    } else {
        die("Error getting access token: " . $response);
    }
}

// Example usage:
$zoom_token = getZoomAccessToken();
echo "Zoom Access Token: " . $zoom_token;

?>
