<?php

$xml = simplexml_load_file("data.xml");
$action = $_GET['action'];

// READ
if ($action == "read") {

    foreach ($xml->student as $s) {
        echo "<tr>
            <td>{$s->id}</td>
            <td>{$s->name}</td>
            <td>{$s->course}</td>
            <td>{$s->phone}</td>
            <td>{$s->address}</td>
            <td>
                <a href='#' onclick=\"editStudent('{$s->id}','{$s->name}','{$s->course}','{$s->phone}','{$s->address}')\">Edit</a>
                <a href='#' onclick=\"deleteStudent('{$s->id}')\" class='btn-delete'>Delete</a>
            </td>
        </tr>";
    }
}

// ADD
if ($action == "add") {

    $id = count($xml->student) + 1;

    $student = $xml->addChild("student");
    $student->addChild("id", $id);
    $student->addChild("name", $_GET['name']);
    $student->addChild("course", $_GET['course']);
    $student->addChild("phone", $_GET['phone']);
    $student->addChild("address", $_GET['address']);

    $xml->asXML("data.xml");
}

// UPDATE
if ($action == "update") {

    foreach ($xml->student as $s) {
        if ((string)$s->id === $_GET['id']) {
            $s->name = $_GET['name'];
            $s->course = $_GET['course'];
            $s->phone = $_GET['phone'];
            $s->address = $_GET['address'];
        }
    }

    $xml->asXML("data.xml");
}

// DELETE
if ($action == "delete") {

$i=0;
    foreach ($xml->student as $index => $s) {
        if ((string)$s->id === $_GET['id']) {
            unset($xml->student[$i]);
            break;
        }
        $i++;
    }
    $x = 1;
    foreach ($xml->student as $s) {
        $s->id = $x++;
    }

    $xml->asXML("data.xml");
}
?>