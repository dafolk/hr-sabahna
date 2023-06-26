
# Sabahna HR

**`host/api/...` for api route**

---

## Table of contents

> ### API lists
>
>> + [Admin]
>>
>>
>> + [Employee](#employee-api)
>>    1. [GET](#get-employees)
>>    2. [POST](#post-employees)
>>    3. [UPDATE](#update-employeesid)
>>    4. [DELETE](#delete-employeesid)
>>
>>> + [Additional Employee Data](#additional-employee-data-api)
>>>     1. [GET](#get-employeedatas)
>>>     2. [POST](#post-employeedatas)
>>>     3. [UPDATE](#update-employeedatasid)
>>>     4. [DELETE](#delete-employeedatasid)
>>>
>> + [Project]
>>     1. [GET]
>>     2. [POST]
>>     3. [UPDATE]
>>     4. [DELETE]
>>
>>> | [Team] | [Project Team] | [Team Employee](#team-employee-api) |
>>> | ---- | ------------ | ------------- |
>>> | [GET] | [GET](#get-project_team) | [GET](#get-teamemployees) |
>>> | [POST] | [POST](#post-project_team) | [POST](#post-teamemployees) |
>>> | [UPDATE] | [UPDATE](#update-project_teamid) | [UPDATE](#update-teamemployeesid) |
>>> | [DELETE] | [DELETE](#delete-project_teamid) | [DELETE](#delete-teamemployeesid) |

---

## **Employee API**

### `GET` */employees*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Employees List",
    "data": [
        {
            "id": 1,
            "fullname": "example",
            "email": "example@gmail.com",
            "phone": "000000",
            "password": "hashed password",
            "photo": null,
            "position": "example",
            "salary": 9999,
            "created_at": "Timestamp",
            "updated_at": "Timestamp",
            "employee_data": [
                {
                    "id": 1,
                    "employee_id": 1,
                    "attendance": 1,
                    "datetime": "Timestamp",
                    "status": 1
                }
            ]
        }
    ]
}
```

### `POST` */employees*

```json
{
    "fullname": "example",
    "email": "example@gmail.com",
    "phone": "000000",
    "password": "example",
    "position": "example",
    "salary": 9999
}
```

**Ecxepted Output:**

```json
{
    "error": false,
    "message": "New Employee Created",
    "data": {
        "fullname": "example",
        "email": "example@gmail.com",
        "phone": "000000",
        "password": "hashed password",
        "position": "example",
        "salary": 9999,
        "updated_at": "Timestamp",
        "created_at": "Timestamp",
        "id": 1
    }
}
```

### `UPDATE` */employees/id*

```json
{
    "fullname": "example updated",
    "email": "example@gmail.com",
    "phone": "000000",
    "password": "example",
    "position": "example",
    "salary": 9999
}
```

**Ecxepted Output:**

```json
{
    "error": false,
    "message": "Employee data updated successfully",
    "data": {
        "id": 1,
        "fullname": "example updated",
        "email": "example@gmail.com",
        "phone": "000000",
        "password": "hashed password",
        "photo": null,
        "position": "example",
        "salary": 9999,
        "created_at": "Timestamp",
        "updated_at": "Timestamp"
    }
}
```

### `DELETE` */employees/id*

**Ecxepted Output:**

```json
{
    "error": false,
    "message": "Employee data updated successfully",
    "data": {
        "id": 1,
        "fullname": "example updated",
        "email": "example@gmail.com",
        "phone": "000000",
        "password": "hashed password",
        "photo": null,
        "position": "example",
        "salary": 9999,
        "created_at": "Timestamp",
        "updated_at": "Timestamp"
    }
}
```

[Return to API Lists Menu](#api-lists)

---

## **Additional Employee Data API**

### `GET` */employeeDatas*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Employee Data List",
    "data": [
        {
            "id": 1,
            "employee_id": 1,
            "attendance": 1,
            "datetime": "Timestamp",
            "status": 1
        }
    ]
}
```

### `POST` */employeeDatas*

```json
{
    "employee_id": 1,
    "attendance": 1, //(0 for absent, 1 for present),
    "status": 1 //(0 for non working, 1 for working) //optional //default 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "Employee data created",
    "data": {
        "employee_id": 1,
        "attendance": 1,
        "id": 1
    }
}
```

### `UPDATE` */employeeDatas/id*

```json
{
    "employee_id": 1,
    "attendance": 1, //(0 for absent, 1 for present),
    "status": 1 //(0 for non working, 1 for working) //optional //default 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "Employee Data Updated",
    "data": {
        "id": 1,
        "employee_id": 1,
        "attendance": 1,
        "datetime": "Timestamp",
        "status": 1
    }
}
```

### `DELETE` */employeeDatas/id*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Employee Data Deleted",
    "data": {
        "id": 1,
        "employee_id": 1,
        "attendance": 1,
        "datetime": "Timestamp",
        "status": 1
    }
}
```

[Return to API Lists Menu](#api-lists)

---

## **Project Team API**

### `GET` */project_team*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Project Teams List",
    "data": [
        {
            "id": 1,
            "team_id": 1,
            "project_id": 1,
            "created_at": "Timestamp",
            "updated_at": "Timestamp"
        }
    ]
}
```

### `POST` */project_team*

```json
{
    "project_id": 1,
    "team_id": 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "New Team Employee created",
    "data": {
        "team_id": 1,
        "employee_id": 1,
        "id": 1
    }
}
```

### `UPDATE` */project_team/id*

```json
{
    "project_id": 1,
    "team_id": 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "Project team updated",
    "data": {
        "id": 1,
        "team_id": 1,
        "project_id": 1,
        "created_at": "Timestamp",
        "updated_at": "Timestamp"
    }
}
```

### `DELETE` */project_team/id*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Projected team deleted",
    "data": {
        "id": 1,
        "team_id": 1,
        "project_id": 1,
        "created_at": "Timestamp",
        "updated_at": "Timestamp"
    }
}
```

[Return to API Lists Menu](#api-lists)

---

## **Team Employee API**

### `GET` */teamEmployees*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Team Employee List",
    "data": [
        {
            "id": 1,
            "team_id": 1,
            "employee_id": 1
        }
    ]
}
```

### `POST` */teamEmployees*

```json
{
    "team_id": 1,
    "employee_id": 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "New Team Employee created",
    "data": {
        "team_id": 1,
        "employee_id": 1,
        "id": 1
    }
}
```

### `UPDATE` */teamEmployees/id*

```json
{
    "team_id": 1,
    "employee_id": 1
}
```

**Excepted Output:**

```json
{
    "error": false,
    "message": "Team Employee updated",
    "data": {
        "id": 1,
        "team_id": 1,
        "employee_id": 1
    }
}
```

### `DELETE` */teamEmployees/id*

**Excepted Output:**

```json
{
    "error": false,
    "message": "Team Employee deleted",
    "data": {
        "id": 1,
        "team_id": 1,
        "employee_id": 1
    }
}
```

[Return to API Lists Menu](#api-lists)

---
