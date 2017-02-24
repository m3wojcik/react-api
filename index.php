<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
sleep(1);
switch ($_GET["q"]) {
  case "getAppData":
      echo '{
          "user": {"login": "jkowalski", "firstName": "Jan", "lastName": "Muszynski", "avatar": "https://unsplash.it/48/48?random&time=1484309785649"},
          "locales": {"currency": "PLN","currencyCode": "zł", "language": "PL"},
          "notifications": {"news": 2, "newInMarks": 1, "newInAttendance": 2, "newInMessages": 3, "newInFiles": 4, "newInTests": 5, "newInElibrary": 6, "newInSurveys": 7, "newInPayments": 8 },
          "groups":[{"id":1, "name": "Angielski 3/2016", "dateFrom": "2017-01-25 14:00:00" , "dateTo": "2017-03-25 14:00:00"}, {"id":2, "name": "Francuski 4/2016", "dateFrom": "2017-02-25 14:00:00" , "dateTo": "2017-05-25 14:00:00"}]
        }';
  break;
  case "getUserData":
      echo '{
        "login": "jkowalski",
        "firstName": "Jan",
        "lastName": "Muszynski",
        "phone": "799 010 339",
        "email": "jan@wp.pl",
        "avatar": "https://unsplash.it/192/192?random&time=1484309785649"
      }';
  break;
  case "getClassesDashboard":
        echo '[
            {"id": 1,
               "name": "Angielski",
               "group": "Angielski 3/2016",
               "room": "Manchester",
               "date": "2017-01-25 14:00:00",
               "length": 45,
               "teacher": "Lektorski Jan",
               "active" : true,
               "status" : {"name": "zajęcia odwołano", "color":"#d9534f"},
               "details": []
             },
            {"id": 2, "name": "Francuski1", "group": "Francuski 4/2016", "room": "Chelsea", "date": "2017-01-28 14:00:00", "length": 45, "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"},{"name":"dodano pliki","class":"label-info"}]},
            {"id": 3, "name": "Angielski", "group": "Angielski 3/2016", "room": "Manchester", "date": "2017-02-01 14:00:00", "length": 45, "teacher": "Lektorski Jan", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
            {"id": 4, "name": "Francuski", "group": "Francuski 4/2016", "room": "Chelsea", "date": "2016-02-04 16:00:00", "length": 45, "teacher": "Pier Karde", "active" : true, "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]}
          ]';
    break;
    case "getAttendanceDashboard":
        echo '[
          {"groupId": 1, "groupName": "Angielski 3/2016", "attendance": "93", "statuses": [{ "name": "Nieobecność", "color": "#fc5c50", "date": "2016-12-13 18:00:00", "function": "absent" }, { "name": "Spoznienie", "color": "#ffb629", "date": "2016-12-23 18:00:00", "function": "present" }, { "name": "Spoznienie", "color": "#ffb629", "date": "2016-12-23 18:00:00", "function": "present" }]}
        ]';
    break;
    case "getMarksDashboard":
        echo '[
          {"groupId": 1,
            "groupName": "Angielski 3/2016",
            "gradeType": "percent",
            "marks": [
              { "columnId":1, "name": "test", "weight": 1, "value": "60", "maxValue": "100", "date": "2016-12-23 18:00:00" },
              { "columnId":2, "name": "Speaking", "weight": 1, "value": "80", "maxValue": "100", "date": "2016-12-20 18:00:00" }
            ]
          },
          {"groupId": 2,
            "groupName": "Angielski 1-3",
            "gradeType": "grades",
            "marks": [
              { "columnId":3, "name": "test", "weight": 1, "value": "5.5", "displayValue": "5+", "date": "2016-12-23 18:00:00" },
              { "columnId":4, "name": "Speaking", "weight": 1, "value": "2.75", "displayValue": "3-", "date": "2016-12-20 18:00:00" }
            ]
          }
        ]';
    break;
    case "getMessagesDashboard":
        echo '[
          {"id": 1, "read": false, "subject": "Witaj w naszej szkole!", "senderId": 2, "sender": "Langlion System","date": "2017-01-03 11:00:00"},
          {"id": 2, "read": false, "subject": "Naganne zachowanie","senderId": 3, "sender": "Bario Malotelli","date": "2016-12-25 18:00:00"}
        ]';
    break;
    case "getTestsDashboard":
        echo '[
          {"id": 1, "language": "English", "name": "Placement test", "sharedBy": "Lektorski Jan", "shareDate": "2016-12-23 18:00:00", "checkingTeacher": "Lektorski Jan", "duration": "3600", "result": null, "completed": false, "rated": false, "multipleSolving": true},
          {"id": 2, "language": "English", "name": "Grammar", "sharedBy": "Lektorski Jan", "shareDate": "2017-01-08 18:00:00", "checkingTeacher": "Lektorski Jan", "duration": null, "result": 80, "completed": false, "rated": true, "multipleSolving": true}
        ]';
    break;
    case "getElibraryDashboard":
        echo '[
          {"id": 2, "status": "borrowed", "dateFrom": "2017-01-15 18:00:00", "dateReturn": "2017-01-25 18:00:00", "title": "Pan Tadeusz", "author": "Adam Mickiewicz", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 20},
          {"id": 4, "status": "reserved", "dateFrom": "2017-01-30 00:00:01", "dateTo": "2017-01-31 18:00:00", "title": "Anioły i demony", "author": "Dan Brown", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 20},
          {"id": 6, "status": "borrowed", "dateFrom": "2017-01-30 00:00:01", "dateReturn": "2017-02-03 00:00:01", "title": "English in Matrix", "author": "John Smith", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 12}
        ]';
    break;
    case "getSurveysDashboard":
        echo '[
          {"id": 1, "name": "Satisfaction survey", "sharedBy": "Lektorski Jan", "shareDate": "2016-12-23 18:00:00", "completed": false},
          {"id": 2, "name": "Test survey", "sharedBy": "Lektorski Jan", "shareDate": "2017-01-23 18:00:00", "completed": false}
        ]';
    break;
    case "getPaymentsDashboard":
    echo '{
      "amountPaid": "400",
      "totalAmount": "1000",
      "groups":[
        {
          "id":3,
          "name": "Grupa angielskiego",
          "installments":[
            {"id":9, "status": "partlyPaid","paymentDate": "2016-12-23 18:00:00", "dateOfPayment": "2016-12-25 18:00:00", "amountToPay": "250", "amountPaid": "150", "leftToPay": "100" },
            {"id":10, "status": "notPaid","paymentDate": "2017-01-25 18:00:00", "amountToPay": "250"},
            {"id":11, "status": "notPaid","paymentDate": "2017-02-04 18:00:00", "amountToPay": "250"}
          ]
        }
      ]
    }';
    break;
    case "getNewsDashboard":
        echo '[
          {"id": 1, "title": "Angielski dla dzieci", "date": "2016-12-23 18:00:00", "content": "Angielski dla dzieci Nigdy nie jest za wcześnie by rozpocząć naukę języka. Korzystając z wieloletniego doświadczenia w nauczaniu maluchów sprawimy, by Twoje dziecko już od 3 roku życia przez zabawę poznawało język obcy."},
          {"id": 2, "title": "Witamy po świętach!", "date": "2017-01-23 18:00:00", "content": "Dodatkowe kursy online. Rozpoczęliśmy już zapisy na dodatkowe kursy online. Z nami szybko nadrobisz wszelkie zaległości. Zobacz naszą ofertę."}
        ]';
    break;
    case "getClasses":
    echo '[
        {"id": 1,
           "name": "Angielski",
           "room": "Manchester",
           "date": "2016-11-24 14:00:00",
           "length": 45,
           "teacher": "Lektorski Jan",
           "status" : {"name": "zajęcia odwołano", "color":"#d9534f"},
           "details": []
         },
         {"id": 2, "name": "Angielski", "room": "Manchester", "date": "2016-12-01 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 3, "name": "Angielski", "room": "Manchester", "date": "2016-12-08 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 4, "name": "Angielski", "room": "Manchester", "date": "2016-12-15 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 5, "name": "Angielski", "room": "Manchester", "date": "2016-12-22 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 6, "name": "Angielski", "room": "Manchester", "date": "2017-01-07 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 7, "name": "Angielski", "room": "Manchester", "date": "2017-01-14 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 8, "name": "Angielski", "room": "Manchester", "date": "2017-01-21 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 9, "name": "Angielski", "room": "Manchester", "date": "2017-01-28 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 10, "name": "Angielski", "room": "Manchester", "date": "2017-02-12 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 11, "name": "Angielski", "room": "Manchester", "date": "2017-02-13 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 12, "name": "Angielski", "room": "Manchester", "date": "2017-02-18 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 20, "name": "Angielski", "room": "Manchester", "date": "2017-02-26 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 13, "name": "Angielski", "room": "Manchester", "date": "2017-03-03 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 14, "name": "Angielski", "room": "Manchester", "date": "2017-03-10 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 15, "name": "Angielski", "room": "Manchester", "date": "2017-03-17 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 16, "name": "Angielski", "room": "Manchester", "date": "2017-03-25 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 17, "name": "Angielski", "room": "Manchester", "date": "2017-04-03 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 18, "name": "Angielski", "room": "Manchester", "date": "2017-04-10 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]},
         {"id": 19, "name": "Angielski", "room": "Manchester", "date": "2017-04-17 14:00:00", "length": 45, "teacher": "Lektorski Jan", "status":null, "details": [{"name":"uzupełniono","class":"label-success"}]}
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
      {"groupId": 1,
        "groupName": "Angielski 3/2016",
        "gradeType": "percent",
        "marks": [
          { "columnId":1, "name": "test", "weight": 1, "value": 60, "maxValue": "100", "date": "2016-12-23 18:00:00" },
          { "columnId":2, "name": "Speaking", "weight": 2, "value": 80, "maxValue": "100", "date": "2016-12-20 18:00:00" },
            { "columnId":3, "name": "Speaking", "weight": 1, "value": 30, "maxValue": "100", "date": "2016-12-10 18:00:00" }
        ]
      },
      {"groupId": 2,
        "groupName": "Angielski 1-3",
        "gradeType": "grades",
        "marks": [
          { "columnId":3, "name": "test", "weight": 1, "value": 5.5, "displayValue": "5+", "date": "2016-12-23 18:00:00" },
          { "columnId":4, "name": "Speaking", "weight": 1, "value": 2.75, "displayValue": "3-", "date": "2016-12-20 18:00:00" }
        ]
      }
    ]';
    break;
    case "getMarksClassByColumn":
      if($_GET["id"] == 1){
          echo '{
            "columnId": 1,
            "name": "test",
            "gradeType": "percent",
            "marks": [{ "value": "40", "weight": 1},{ "value": 60, "user": true , "weight": 1},{ "value": 65, "weight": 1},{ "value": 75, "weight": 1},{ "value": 80, "weight": 1},{ "value": 85, "weight": 1}]
          }';
        }else if($_GET["id"] == 3){
            echo '{
              "columnId": 3,
              "name": "test",
              "gradeType": "grades",
              "marks": [{ "value": 2.5, "displayValue": "2+" , "weight": 1},{ "value": 3.5, "displayValue": "3+", "user": true, "weight": 1 },{ "value": 4, "displayValue": "4", "weight": 1 },{ "value": 5.5, "displayValue": "5+", "weight": 1 },{ "value": 5.5, "displayValue": "5+", "weight": 1 },{ "value": 5.5, "displayValue": "5+", "weight": 1 },{ "value": 6, "displayValue": "6", "weight": 1 }]
            }';
        }
    break;
    case "getMarksClassAverage":
      if($_GET["id"] == 1){
          echo '{
            "groupId": 1,
            "gradeType": "percent",
            "averages": [{ "value": "40", "weight": 1},{ "value": 60, "user": true , "weight": 1},{ "value": 65, "weight": 1},{ "value": 75, "weight": 1},{ "value": 80, "weight": 1},{ "value": 85, "weight": 1}]
          }';
        }else if($_GET["id"] == 2){
            echo '{
              "groupId": 2,
              "gradeType": "grades",
              "averages": [{ "value": 2.5, "weight": 1},{ "value": 3.5, "user": true, "weight": 1 },{ "value": 4, "weight": 1 },{ "value": 5.5, "weight": 1 },{ "value": 5.5, "weight": 1 },{ "value": 5.5, "weight": 1 },{ "value": 6, "weight": 1 }]
            }';
        }
    break;
    case "getAttendance":
        echo '[
          {"groupId": 1,
            "groupName": "Angielski 3/2016",
            "attendance": 93,
            "statuses": [{ "name": "Nieobecność", "color": "#fc5c50", "date": "2017-02-13 18:00:00", "function": "absent" },{ "name": "Złe zachowanie", "color": "#F2711C", "date": "2017-02-13 18:00:00", "function": "absent" }, { "name": "Spoznienie", "color": "#ffb629", "date": "2017-01-23 18:00:00", "function": "present" }]
          }
        ]';
    break;
    case "getInboxMessages":
        echo '[
          {"id": 1, "read": true, "subject": "Witaj w naszej szkole!", "senderId": 2, "sender": "Langlion System","date": "2017-01-03 11:00:00"},
          {"id": 2, "read": false, "subject": "Naganne zachowanie","senderId": 3, "sender": "Bario Malotelli","date": "2016-12-25 18:00:00"}
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
            "files":[{"id":1, "name":"folder 1", "type":"folder"},{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"},{"id":11, "name":"grafik", "type":"file", "extension":"doc", "size": "450KB"},{"id":12, "name":"grafik", "type":"file", "extension":"docx", "size": "450KB"},{"id":13, "name":"grafik", "type":"file", "extension":"xls", "size": "450KB"},{"id":14, "name":"grafik", "type":"file", "extension":"ppt", "size": "450KB"}]
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
            "duration": 3600,
            "timeLeft": 105,
            "result": null,
            "completed": false,
            "rated": false,
            "multipleSolving": true,
            "testData": {
              "pages": [
                {"blocks":[
                  {"id": 10, "type": "block-of-text", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 11, "type": "single", "question": "Did you ... anywhere interesting last weekend?", "answers": [{"id": 110, "label":"go", "value": "110"}, {"id": 111, "label":"going", "value": "111"}, {"id": 112, "label":"was", "value": "112"}]},
                  {"id": 12, "type": "multiple", "question": "I think ... taxi driver.", "answers": [{"id": 120, "label":"she is a", "value": "120"}, {"id": 121, "label":"her job is a", "value": "121"}, {"id": 122, "label":"she is", "value": "122"}]},
                  {"id": 13, "type": "open","maxPoints": 10, "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 14, "type": "fill-gaps", "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap"},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap"}]},
                  {"id": 15, "type": "fill-gaps-list", "answers":["zdrowie", "krewny"], "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap"},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap"}]},
                  {"id": 16, "type": "fill-gaps-predefined", "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap", "answers":["zdrowie", "choroba"]},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap", "answers":["krewny", "krewna","obcy"]}]},
                  {"id": 17, "type": "youtube", "url": "https://www.youtube.com/embed/H7uTdb638Hg"},
                    {"id": 18, "type": "files", "files":[{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB", "src": "https://i.ytimg.com/vi/cNycdfFEgBc/maxresdefault.jpg" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"},{"id":11, "name":"grafik", "type":"file", "extension":"doc", "size": "450KB"},{"id":12, "name":"grafik", "type":"file", "extension":"docx", "size": "450KB"},{"id":13, "name":"grafik", "type":"file", "extension":"xls", "size": "450KB"},{"id":14, "name":"grafik", "type":"file", "extension":"ppt", "size": "450KB"}]}
                  ]}
              ]
            }
          }';
    break;
    case "viewTest":
        echo '{
            "id": 1,
            "language": "English",
            "name": "Placement test",
            "sharedBy": "Lektorski Jan",
            "shareDate": "2016-12-23 18:00:00",
            "checkingTeacher": "Lektorski Jan",
            "duration": null,
            "result": 80,
            "completed": false,
            "rated": false,
            "multipleSolving": true,
            "testData": {
              "pages": [
                {"blocks":[
                  {"id": 10, "type": "block-of-text", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 11, "type": "single", "correct": true, "correctAnswer": "111", "userAnswer": "111", "question": "Did you ... anywhere interesting last weekend?", "answers": [{"id": 110, "label":"go", "value": "110"}, {"id": 111, "label":"going", "value": "111"}, {"id": 112, "label":"was", "value": "112"}]},
                  {"id": 12, "type": "multiple", "correct": false, "correctAnswer": "1,2", "userAnswer": "1,3", "question": "I think ... taxi driver.", "answers": [{"id": 120, "label":"she is a", "value": "1"}, {"id": 121, "label":"her job is a", "value": "2"}, {"id": 122, "label":"she is", "value": "3"}]},
                  {"id": 13, "type": "open","maxPoints": 10, "userPoints": 6, "userAnswer": "moja odpowiedź na to pytanie", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 14, "type": "fill-gaps", "correct": false, "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap","userAnswer": "zdrowie", "correctAnswer":["zdrowie"]},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap","userAnswer": "bardzo", "correctAnswer":["albo nie","albo tak"]}]},
                  {"id": 15, "type": "fill-gaps-list", "correct": true, "answers":["zdrowie", "krewny"], "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap","userAnswer": "zdrowie", "correctAnswer":["zdrowie"]},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap","userAnswer": "bardzo", "correctAnswer":["bardzo","albo nie"]}]},
                  {"id": 16, "type": "fill-gaps-predefined", "correct": true, "textArray": [{"type":"text", "value":"Litwo! Ojczyzno moja! Ty jesteś jak"},{"type":"gap","userAnswer": "zdrowie", "correctAnswer":["zdrowie"]},{"type":"text", "value":"Nazywał się z opieki panicz bogaty,"},{"type":"gap","userAnswer": "bardzo", "correctAnswer":["bardzo","albo nie"]}]},
                  {"id": 17, "type": "youtube", "url": "https://www.youtube.com/embed/H7uTdb638Hg"},
                  {"id": 18, "type": "files", "files":[{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB", "src": "https://i.ytimg.com/vi/cNycdfFEgBc/maxresdefault.jpg" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"},{"id":11, "name":"grafik", "type":"file", "extension":"doc", "size": "450KB"},{"id":12, "name":"grafik", "type":"file", "extension":"docx", "size": "450KB"},{"id":13, "name":"grafik", "type":"file", "extension":"xls", "size": "450KB"},{"id":14, "name":"grafik", "type":"file", "extension":"ppt", "size": "450KB"}]}
                  ]}
              ]
            }
          }';
    break;
    case "getLoginHistory":
        echo '[
          {"id": 1, "date": "2016-12-23 18:00:00", "ip": "83.28.218.147", "logSuccessfully": true},
          {"id": 2, "date": "2016-12-23 18:00:00", "ip": "83.28.218.147", "logSuccessfully": false},
          {"id": 3, "date": "2016-12-23 18:00:00", "ip": "83.28.218.147", "logSuccessfully": true}
        ]';
    break;
    case "getElibraryList":
        echo '[
          {"id": 1, "status": "available", "title": "English in Matrix", "author": "John Smith", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 10},
          {"id": 2, "status": "borrowed", "dateFrom": "2017-01-15 18:00:00", "dateReturn": "2017-01-25 18:00:00", "title": "Pan Tadeusz", "author": "Adam Mickiewicz", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 20},
          {"id": 3, "status": "available", "title": "Inferno", "author": "Dan Brown", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 1},
          {"id": 4, "status": "reserved", "dateFrom": "2017-01-30 00:00:01", "dateTo": "2017-01-31 18:00:00", "title": "Anioły i demony", "author": "Dan Brown", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 20},
          {"id": 5, "status": "available", "title": "English in Matrix", "author": "John Smith", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 3},
          {"id": 6, "status": "borrowed", "dateFrom": "2017-01-30 00:00:01", "dateReturn": "2017-02-03 00:00:01", "title": "English in Matrix", "author": "John Smith", "deposit": "5PLN", "bookingPeriod": 10, "department": "WAW", "availableUnits": 12}
        ]';
    break;
    case "getElibraryDetails":
        echo '{
          "id": 1,
          "status": "available",
          "title": "English in Matrix",
          "author": "John Smith",
          "deposit": "5PLN",
          "bookingPeriod": 10,
          "department": "WAW",
          "availableUnits": 10
        }';
    break;
    case "reserveElibraryItem":
      echo '200';
    break;
    case "cancelReserveElibraryItem":
      echo '200';
    break;
    case "getSurveys":
        echo '[
          {"id": 1, "name": "Satisfaction survey", "sharedBy": "Lektorski Jan", "shareDate": "2016-12-23 18:00:00", "completed": false},
          {"id": 2, "name": "Test survey", "sharedBy": "Lektorski Jan", "shareDate": "2017-01-23 18:00:00", "completed": true}
        ]';
    break;
    case "getSurvey":
        echo '{
          "id": 1,
          "name": "Satisfaction survey",
          "sharedBy": "Lektorski Jan",
          "shareDate": "2016-12-23 18:00:00",
          "completed": false,
          "surveyData": {
            "pages": [
                {"blocks":[
                  {"id": 10, "type": "block-of-text", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 9, "type": "range", "question": "Ocen w sklali od 5 do 10", "minValue": 5, "maxValue": 10},
                  {"id": 11, "type": "single", "question": "Did you ... anywhere interesting last weekend?", "answers": [{"id": 110, "label":"go", "value": "110"}, {"id": 111, "label":"going", "value": "111"}, {"id": 112, "label":"was", "value": "112"}]},
                  {"id": 12, "type": "multiple", "question": "I think ... taxi driver.", "answers": [{"id": 120, "label":"she is a", "value": "120"}, {"id": 121, "label":"her job is a", "value": "121"}, {"id": 122, "label":"she is", "value": "122"}]},
                  {"id": 13, "type": "open","maxPoints": 10, "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 18, "type": "files", "files":[{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB", "src": "https://i.ytimg.com/vi/cNycdfFEgBc/maxresdefault.jpg" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"},{"id":11, "name":"grafik", "type":"file", "extension":"doc", "size": "450KB"},{"id":12, "name":"grafik", "type":"file", "extension":"docx", "size": "450KB"},{"id":13, "name":"grafik", "type":"file", "extension":"xls", "size": "450KB"},{"id":14, "name":"grafik", "type":"file", "extension":"ppt", "size": "450KB"}]}
                  ]}
              ]
            }
          }';
    break;
    case "viewSurvey":
        echo '{
          "id": 1,
          "name": "Satisfaction survey",
          "sharedBy": "Lektorski Jan",
          "shareDate": "2016-12-23 18:00:00",
          "completed": true,
          "surveyData": {
            "pages": [
                {"blocks":[
                  {"id": 10, "type": "block-of-text", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 9, "type": "range", "question": "Ocen w sklali od 4 do 10", "minValue": 4, "maxValue": 10, "answer": 7},
                  {"id": 11, "type": "single", "userAnswer": "111", "question": "Did you ... anywhere interesting last weekend?", "answers": [{"id": 110, "label":"go", "value": "110"}, {"id": 111, "label":"going", "value": "111"}, {"id": 112, "label":"was", "value": "112"}]},
                  {"id": 12, "type": "multiple",  "userAnswer": "1,3", "question": "I think ... taxi driver.", "answers": [{"id": 120, "label":"she is a", "value": "1"}, {"id": 121, "label":"her job is a", "value": "2"}, {"id": 122, "label":"she is", "value": "3"}]},
                  {"id": 13, "type": "open", "userAnswer": "moja odpowiedź na to pytanie", "text": "The best way to use these icons on the web is with our icon web font. Its lightweight, easy to use, and hosted by Google"},
                  {"id": 18, "type": "files", "files":[{"id":9, "name":"wakacje", "type":"file", "extension":"jpg", "size": "300KB", "src": "https://i.ytimg.com/vi/cNycdfFEgBc/maxresdefault.jpg" },{"id":10, "name":"grafik", "type":"file", "extension":"pdf", "size": "450KB"},{"id":11, "name":"grafik", "type":"file", "extension":"doc", "size": "450KB"},{"id":12, "name":"grafik", "type":"file", "extension":"docx", "size": "450KB"},{"id":13, "name":"grafik", "type":"file", "extension":"xls", "size": "450KB"},{"id":14, "name":"grafik", "type":"file", "extension":"ppt", "size": "450KB"}]}
                  ]}
              ]
            }
          }';
    break;
    case "getPayments":
    echo '{
      "amountPaid": "400",
      "totalAmount": "1000",
      "groups":[
        {
          "id":3,
          "name": "Grupa angielskiego",
          "installments":[
            {"id":8, "status": "paid","paymentDate": "2016-12-23 18:00:00", "dateOfPayment": "2016-12-25 18:00:00", "amountToPay": "250", "amountPaid": "250" },
            {"id":9, "status": "partlyPaid","paymentDate": "2016-12-23 18:00:00", "dateOfPayment": "2016-12-25 18:00:00", "amountToPay": "250", "amountPaid": "150", "leftToPay": "100" },
            {"id":10, "status": "notPaid","paymentDate": "2017-01-25 18:00:00", "amountToPay": "250"},
            {"id":11, "status": "notPaid","paymentDate": "2017-02-04 18:00:00", "amountToPay": "250"}
          ]
        }
      ]
    }';
    break;


    // case "getTableData":
    //     echo '[
    //       {"category": "Sporting Goods", "price": "$49.99", "stocked": true, "name": "Football"},
    //       {"category": "Sporting Goods", "price": "$9.99", "stocked": true, "name": "Baseball"},
    //       {"category": "Sporting Goods", "price": "$29.99", "stocked": false, "name": "Basketball"},
    //       {"category": "Electronics", "price": "$99.99", "stocked": true, "name": "iPod Touch"},
    //       {"category": "Electronics", "price": "$399.99", "stocked": false, "name": "iPhone 5"},
    //       {"category": "Electronics", "price": "$199.99", "stocked": true, "name": "Nexus 7"}
    //     ]';
    // break;
    // case "getUsers":
    //     echo '[
    //       {"id": 1, "first": "Bucky", "last": "Roberts", "age": 71, "description": "Bucky is a React developer and YouTuber", "thumbnail": "http://i.imgur.com/7yUvePI.jpg" },
    //       {"id": 2, "first": "Joby",  "last": "Wasilenko",  "age": 27,  "description": "Joby loves the Packers, cheese, and turtles.",  "thumbnail": "http://i.imgur.com/52xRlm8.png"},
    //       {"id": 3,  "first": "Madison",  "last": "Williams",  "age": 24,  "description": "Madi likes her dog but it is really annoying.",  "thumbnail": "http://i.imgur.com/4EMtxHB.png"}
    //     ]';
    // break;
}
