
# Sabahna HR

## `host/api/...` for api route

---

## Table of contents

> ## API lists
>
> ---
>>
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
>>> | Team | Project Team | Team Employee |
>>> | ---- | ------------ | ------------- |
>>> | [GET] | [GET] | [GET]
>>> | [POST] | [POST] | [POST]
>>> | [UPDATE] | [UPDATE] | [UPDATE]
>>> | [DELETE] | [DELETE] | [DELETE]

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
