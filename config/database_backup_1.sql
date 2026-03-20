create table users(
    
    id char(10) serial primary key not null,
    firstname varchar(50) not null,
    lastname varchar(50) not null,
    email varchar(100) not null constraint unique,
    psswd text not null,
    mobile_phone varchar(20) not null constraint unique,
    address varchar(100) null, --
    birthday date null, --
    status boolean default true,
    gender char(1) default null, --
    created_at default current_timestamp,
    updated_at default current_timestamp,
    deleted_at timestamp default null --
);
