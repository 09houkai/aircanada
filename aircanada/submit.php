<?php

$data = json_decode(file_get_contents("php://input"));

$mediaType = "";

foreach ($data->mediaType as $type => $checked) {
	if($checked) $mediaType .= $type." ";
}

$htmlContent = '
		<h1>Form submitted</h1>
        <table cellspacing="0" style="text-align: left;">
            <tr>
                <th>Title:</th><td>'.$data->title.'</td>
            </tr>
            <tr>
                <th>First name:</th><td>'.$data->firstname.'</td>
            </tr>
            <tr>
                <th>Last name:</th><td>'.$data->lastname.'</td>
            </tr>
            <tr>
                <th>Company:</th><td>'.$data->company.'</td>
            </tr>
            <tr>
                <th>Phone number:</th><td>'.$data->phone.'</td>
            </tr>
            <tr>
                <th>Email:</th><td>'.$data->email.'</td>
            </tr>
            <tr>
                <th>Media type:</th><td>'.$mediaType.'</td>
            </tr>
            <tr>
                <th>Description:</th><td>'.$data->description.'</td>
            </tr>
        </table>';

echo $htmlContent;

?>