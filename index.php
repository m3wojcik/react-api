<?php
header("Access-Control-Allow-Origin: *");
sleep(1);
switch ($_GET["q"]) {
  case "getAppData":
      echo '{
          "user": {"firstName": "Jan", "lastName": "Muszynski"},
          "notifications": {"unreadMessages": 1}
        }';
  break;
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
               "date": "2016-12-12 08:00:00",
               "length": 45,
               "weekday": "Friday",
               "teacher": "Lektorski Jan",
               "active" : false,
               "status" : {"name": "zajęcia odwołano", "color":"#d9534f"},
               "details": []
             },
            {"id": 2, "name": "Francuski", "group": "Francuski 4/2016", "room": "Chelsea", "date": "2016-12-23 18:00:00", "length": 45, "weekday": "Monday", "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"},{"name":"dodano pliki","class":"label-info"}]},
            {"id": 3, "name": "Angielski", "group": "Angielski 3/2016", "room": "Manchester", "date": "2016-12-24 18:00:00", "length": 45, "weekday": "Friday", "teacher": "Lektorski Jan", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
            {"id": 4, "name": "Francuski", "group": "Francuski 4/2016", "room": "Chelsea", "date": "2016-02-25 16:00:00", "length": 45, "weekday": "Monday", "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]}
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
    case "getNotifications":
        echo '[
          {"id": 1, "type": "calendar", "name": "Wystąpiły zmiany w planie zajęć w grupie Angielski/Czw/Pt/2015.","date": "2016-12-23 18:00:00" },
          {"id": 2, "type": "calendar", "name": "Wystąpiły zmiany w planie zajęć w grupie Angielski/Czw/Pt/2015.", "date": "2016-12-23 18:00:00" },
          {"id": 3, "type": "calendar", "name": "Wystąpiły zmiany w planie zajęć w grupie Angielski 3/2015.", "date": "2016-12-23 18:00:00" },
          {"id": 4, "type": "message", "name": "Wiadomość od Langlion System 27.08.2015 16:39.", "date": "2016-12-23 18:00:00" },
          {"id": 5, "type": "calendar","name": "Wystąpiły zmiany w planie zajęć w grupie Angielski/Czw/Pt/2015.", "date": "2016-12-23 18:00:00" },
        ]';
    break;
    case "getMarks":
        echo '[
          {"groupId": 1, "groupName": "Angielski 3/2016", "marks": [{ "name": "test", "value": "60/100", "date": "2016-12-23 18:00:00" }, { "name": "Speaking", "value": "80/100", "date": "2016-12-20 18:00:00" }], "percent": 73 }
        ]';
    break;
    case "getAttendance":
        echo '[
          {"groupId": 1, "groupName": "Angielski 3/2016", "attendance": "93", "statuses": [{ "name": "Nieobecność", "color": "#fc5c50", "date": "2016-12-13 18:00:00", "function": "absent" }, { "name": "Spoznienie", "color": "#ffb629", "date": "2016-12-23 18:00:00", "function": "present" }]}
        ]';
    break;
    case "getInboxMessages":
        echo '[
          {"id": 1, "read": true, "subject": "Witaj w naszej szkole!", "senderId": 2, "sender": "Langlion System","date": "2017-01-03 11:00:00"},
          {"id": 2, "read": false, "subject": "Witaj w naszej szkole!","senderId": 3, "sender": "Langlion System","date": "2016-12-25 18:00:00"}
        ]';
    break;
    case "getMessage":
        echo '{
          "id": 1,
          "read": true,
          "subject": "Witaj w naszej szkole!",
          "senderId": 2,
          "sender": "Langlion System",
          "message":"<p>Dzień dobry,</p><p>Bardzo się cieszę, że rozpocząłeś naukę w Demonstracyjnej Szkole Językowej. Mam nadzieję, że czas spędzony u nas, będzie pełen pozytywnych emocji i dużej dawki języków obcych.</p><p>Pozdrawiam serdecznie,</p><p>Dyrektor Szkoły</p><p>Michał Nowak</p>",
          "date": "2016-12-23 18:00:00"
        }';
    break;
    case "getAddressBook":
        echo '{
          "1": { "name": "Lektorski Jan", "id":1, "isSelected": false },
          "2": { "name": "Smith James", "id": 2, "isSelected": false },
          "3": { "name": "Kowalczyk Albin", "id": 3, "isSelected": false},
          "4": { "name": "Zieliński Albrecht", "id": 4, "isSelected": false},
          "5": { "name": "Szymański Aldon", "id": 5, "isSelected": false},
          "8": { "name": "Kozłowski Aleks", "id": 8, "isSelected": false},
          "7": { "name": "Wróbel Anna", "id": 7, "isSelected": false}
        }';
    break;
    case "getFiles":
      if(!isset($_GET["id"]) || $_GET["id"] == 0){
          echo '{
            "path":[{"id":0,"name": "folder 0"}],
            "files":[{"id":1, "name":"folder 1", "type":"folder"},{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"}]
          }';
      }elseif($_GET["id"] == 1){
        echo '{
          "path":[{"id":0,"name": "folder 0"}, {"id":1,"name": "folder 1"}],
          "files":[{"id":2, "name":"folder 2", "type":"folder"}]
        }';
      }elseif($_GET["id"] == 2){
        echo '{
          "path":[{"id":0,"name": "folder 0"}, {"id":1,"name": "folder 1"}, {"id":2,"name": "folder 2"}],
          "files":[]
        }';
      }
    break;
    case "getTests":
        echo '[
          {"id": 1, "language": "English", "name": "Placement test", "sharedBy": "Lektorski Jan", "shareDate": "2016-12-23 18:00:00", "checkingTeacher": "Lektorski Jan", "duration": "60", "result": null, "completed": false, "rated": false, "multipleSolving": true},
          {"id": 2, "language": "English", "name": "Grammar", "sharedBy": "Lektorski Jan", "shareDate": "2017-01-08 18:00:00", "checkingTeacher": "Lektorski Jan", "duration": null, "result": 80, "completed": true, "rated": true, "multipleSolving": true}
        ]';
    break;
    case "getTest":
        echo '{
            "id": 1,
            "language": "English",
            "name": "Placement test",
            "sharedBy": "Lektorski Jan",
            "shareDate": "2016-12-23 18:00:00",
            "checkingTeacher": "Lektorski Jan",
            "duration": "60",
            "result": null,
            "completed": false,
            "rated": false,
            "multipleSolving": true,
            "testData": {
              "pages": [
                {"blocks":[
                  {"id": 10, "type": "block-of-text", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 11, "type": "single", "question": "Did you ... anywhere interesting last weekend?", "answers": [{"id": 110, "label":"go", "value": "110"}, {"id": 111, "label":"going", "value": "111"}, {"id": 112, "label":"was", "value": "112"}]},
                  {"id": 12, "type": "multiple", "question": "I think ... taxi driver.", "answers": [{"id": 120, "label":"she is a", "value": "1"}, {"id": 121, "label":"her job is a", "value": "2"}, {"id": 122, "label":"she is", "value": "3"}]},
                  {"id": 13, "type": "open","maxPoints": 10, "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 14, "type": "fill-gaps", "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap"},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap"}]},
                  {"id": 15, "type": "fill-gaps-list", "answers":["zdrowie", "krewny"], "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap"},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap"}]},
                  {"id": 16, "type": "fill-gaps-predefined", "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap", "answers":["zdrowie", "choroba"]},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap", "answers":["krewny", "krewna","obcy"]}]}
                  ]}
              ]
            }
          }';
    break;

}
