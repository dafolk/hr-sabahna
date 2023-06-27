# Sabahna HR

**`host/api/...` for api route**

---

## Table of contents

> ### API lists
>
> > -   [Admin](#admin-api) 1.[REGISTER](#admin-register) 2.[LOGIN](#admin-login) 3.[LOGOUT](#admin-logout)
> > -   [Employee](#employee-api)
> >     1. [GET](#get-employees)
> >     2. [POST](#post-employees)
> >     3. [UPDATE](#update-employeesid)
> >     4. [DELETE](#delete-employeesid)
> >
> > > -   [Additional Employee Data](#additional-employee-data-api)
> > >     1. [GET](#get-employeedatas)
> > >     2. [POST](#post-employeedatas)
> > >     3. [UPDATE](#update-employeedatasid)
> > >     4. [DELETE](#delete-employeedatasid)
> >
> > -   [Project]
> >     1. [GET](#get-project)
> >     2. [POST](#post-project)
> >     3. [UPDATE](#update-project)
> >     4. [DELETE](#delete-project)
> >
> > > | [Team](#team-api)      | [Project Team](#project-team-api) | [Team Employee](#team-employee-api) |
> > > | ---------------------- | --------------------------------- | ----------------------------------- |
> > > | [GET](#get-team)       | [GET](#get-project_team)          | [GET](#get-teamemployees)           |
> > > | [POST](#post-team)     | [POST](#post-project_team)        | [POST](#post-teamemployees)         |
> > > | [UPDATE](#update-team) | [UPDATE](#update-project_teamid)  | [UPDATE](#update-teamemployeesid)   |
> > > | [DELETE](#delete-team) | [DELETE](#delete-project_teamid)  | [DELETE](#delete-teamemployeesid)   |

---

## **Admin Api**

### `POST` \/admin/register

```json
{
    "fullname": "KK",
    "email": "kk1@gmail.com",
    "password": "kkpassword123",
    "photo": null
}
```

### `POST` \/admin/login

```json
{
    "email": "kk@gmail.com",
    "password": "kkpassword123"
}
```

### `POST` \/admin/logout

## **Employee API**

### `GET` _/employees_

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

### `POST` _/employees_

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

### `UPDATE` _/employees/id_

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

### `DELETE` _/employees/id_

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

### `GET` _/employeeDatas_

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

### `POST` _/employeeDatas_

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

### `UPDATE` _/employeeDatas/id_

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

### `DELETE` _/employeeDatas/id_

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

### `GET` _/project_team_

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

### `POST` _/project_team_

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

### `UPDATE` _/project_team/id_

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

### `DELETE` _/project_team/id_

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

### `GET` _/teamEmployees_

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

### `POST` _/teamEmployees_

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

### `UPDATE` _/teamEmployees/id_

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

### `DELETE` _/teamEmployees/id_

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
