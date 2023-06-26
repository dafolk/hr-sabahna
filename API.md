
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
>>> + [Additional Employee Data]
>>>     1. [GET]
>>>     2. [POST]
>>>     3. [UPDATE]
>>>     4. [DELETE]
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

## Employee API

### `GET` <mark>*/employees*</mark>

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

### `UPDATE` */employees/id*

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

### `DELETE` */employees/id*
