<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/products",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D'
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D',
  CURLOPT_HTTPHEADER => array(
    Accept: aplication/json,
    Content-Type: aplication/json
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}




<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"products\": [\n    {\n      \"product_id\": 3,\n      \"quantity\": 1\n    }\n  ]\n}\n",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D',
  CURLOPT_HTTPHEADER => array(
    Accept: aplication/json,
    Content-Type: aplication/json,
    User-Agent: Insomnia/2023.5.2
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/sales",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"products\": [\n    {\n      \"product_id\": 3,\n      \"quantity\": 1\n    },\n\t\t{\n\t\t\t\"product_id\": 5,\n      \"quantity\": 1\n\t\t}\n  ]\n}\n",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D',
  CURLOPT_HTTPHEADER => array(
    Accept: aplication/json,
    Content-Type: aplication/json,
    User-Agent: Insomnia/2023.5.2
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/sales/7",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\n  \"products\": [\n    {\n      \"product_id\": 3,\n      \"quantity\": 1\n    },\n\t\t{\n\t\t\t\"product_id\": 5,\n      \"quantity\": 1\n\t\t}\n  ]\n}\n",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D',
  CURLOPT_HTTPHEADER => array(
    Accept: aplication/json,
    Content-Type: aplication/json,
    User-Agent: Insomnia/2023.5.2
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:8989/api/sales/6",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_POSTFIELDS => "{\n  \"products\": [\n    {\n      \"product_id\": 3,\n      \"quantity\": 1\n    },\n\t\t{\n\t\t\t\"product_id\": 5,\n      \"quantity\": 1\n\t\t}\n  ]\n}\n",
  CURLOPT_COOKIE => 'XSRF-TOKEN=eyJpdiI6InFqN2JTQ1J5WldaNFVISFZQYkFGRkE9PSIsInZhbHVlIjoiUmVwL1hGbkUyUzF6Z2Z6WkVqOWRUZUdnemJxRklWeDVIZUhNZDMwaVJZR0lyWlRtS2dVYWpvV2Z6c2xaQk14bndtTERpZUNxekp3QXdUUWc5VFNNdy9vWXFPMVArQ1NuWUZvS2lLa09OUWtzN0NsVEgyWGlJMkgwMXVIa0VDUzEiLCJtYWMiOiI2OGJjNTgzYjllYzY1MmY4ODA4ZDc5ZDYzYWRkZDRhZmMzYjQ0ZmE1MzU1OTFjMTFmZGM4ZGEyNTY4ZTFmNzc5IiwidGFnIjoiIn0%253D; laravel_session=eyJpdiI6ImhBWXM0MVZIdjZ1azdrUnFaZkRrSWc9PSIsInZhbHVlIjoiVWowTDd5RThGNTByd2dYZWV4RGNYTEFMcHkycExyN1R3MEg0TytTSWlOTUE1Ym9ZVnVDYkFQM3BjcU1WcDJBdkFyd2JVcEk5U1BqNWJhaFBYb0hxYTdMSW9rZ1BzVEU4NGhHY3ord0lCckZMbThXRmpSbndGUzd3WnhjWEpMeW8iLCJtYWMiOiI5NDIzZTc5MmM2MWVhMmI0OTljNmRhYjEzY2I5NWM3OGFkNzJlNmMwNTdhZGJmMDgzZDAxOTExNTA1ZmIzYTIxIiwidGFnIjoiIn0%253D',
  CURLOPT_HTTPHEADER => array(
    Accept: aplication/json,
    Content-Type: aplication/json,
    User-Agent: Insomnia/2023.5.2
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}