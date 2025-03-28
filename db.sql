create table faculty(
    id integer primary key auto_increment,
    name varchar(255) not null,
    major varchar(255) not null
);

create table courses(
    id integer primary key auto_increment,
    code varchar(255) not null,
    name varchar(255) not null,
    units integer not null,
    contact_hours integer not null,
);

create table rooms(
    id integer primary key auto_increment,
    name varchar(255) not null,
    capacity integer not null
);

create table class_sections(
    id integer primary key auto_increment,
    name varchar(255) not null
);

create table course_assignments(
    id integer primary key auto_increment,
    faculty_id integer not null,
    course_id integer not null,
    class_section_id integer not null,
    room_id integer not null,
    start_time time not null,
    end_time time not null,
    day_of_week varchar(255) not null,
    foreign key (faculty_id) references faculty(id),
    foreign key (course_id) references courses(id),
    foreign key (class_section_id) references class_sections(id),
    foreign key (room_id) references rooms(id)
);

