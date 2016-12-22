<?php
header("Access-Control-Allow-Origin: *");
switch ($_GET["q"]) {
    case "getTableData":
        echo '[
          {"category": "Sporting Goods", "price": "$49.99", "stocked": true, "name": "Football"},
          {"category": "Sporting Goods", "price": "$9.99", "stocked": true, "name": "Baseball"},
          {"category": "Sporting Goods", "price": "$29.99", "stocked": false, "name": "Basketball"},
          {"category": "Electronics", "price": "$99.99", "stocked": true, "name": "iPod Touch"},
          {"category": "Electronics", "price": "$399.99", "stocked": false, "name": "iPhone 5"},
          {"category": "Electronics", "price": "$199.99", "stocked": true, "name": "Nexus 7"}
        ]';
    break;
    case "getUsers":
        echo '[
          {"id": 1, "first": "Bucky", "last": "Roberts", "age": 71, "description": "Bucky is a React developer and YouTuber", "thumbnail": "http://i.imgur.com/7yUvePI.jpg" },
          {"id": 2, "first": "Joby",  "last": "Wasilenko",  "age": 27,  "description": "Joby loves the Packers, cheese, and turtles.",  "thumbnail": "http://i.imgur.com/52xRlm8.png"},
          {"id": 3,  "first": "Madison",  "last": "Williams",  "age": 24,  "description": "Madi likes her dog but it is really annoying.",  "thumbnail": "http://i.imgur.com/4EMtxHB.png"}
        ]';
    break;
    case "getUpcomingClasses":
        echo '[
            {"id": 1,
               "name": "Angielski",
               "group": "Angielski 3/2016",
               "room": "Manchester",
               "date": "16.12.2016",
               "startTime": "17:00",
               "endTime": "17:45",
               "weekday": "Friday",
               "teacher": "Lektorski Jan",
               "active" : false,
               "status" : {"name": "zajęcia odwołano", "color":"#d9534f"},
               "details": []
             },
            {"id": 2, "name": "Francuski", "group": "Francuski 4/2016", "room": "Chelsea", "date": "18.12.2016", "startTime": "16:00", "endTime": "16:45", "weekday": "Monday", "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"},{"name":"dodano pliki","class":"label-info"}]},
            {"id": 3, "name": "Angielski", "group": "Angielski 3/2016", "room": "Manchester", "date": "20.12.2016", "startTime": "17:00", "endTime": "17:45", "weekday": "Friday", "teacher": "Lektorski Jan", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
            {"id": 4, "name": "Francuski", "group": "Francuski 4/2016", "room": "Chelsea", "date": "22.12.2016", "startTime": "16:00", "endTime": "16:45", "weekday": "Monday", "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]}
          ]';
    break;
    case "getClassDetails":
        echo '{"id": 3,
               "name": "Angielski",
               "group": "Angielski 3/2016",
               "room": "Manchester",
               "date": "16.12.2016",
               "startTime": "17:00",
               "endTime": "17:45",
               "weekday": "Friday",
               "teacher": "Lektorski Jan",
               "active" : true,
               "status" : {"name": "zajęcia odwołano", "color":"#d9534f"},
               "details": [{"name":"uzupełniono","class":"label-success"},{"name":"dodano pliki","class":"label-info"}]
             }';
    break;
}
