create table user_account (
  id            int auto_increment primary key,
  cpf           varchar(20) not null,
  username      varchar(20) not null,
  user_password varchar(35) not null
);

create table category (
  id    int auto_increment primary key,
  alias varchar(30)
);

create table product (
  id         int auto_increment primary key,
  alias      varchar(30) not null,
  about_it   text,
  price      decimal not null,
  image_path text not null,
  ncm        varchar(30) not null,
  quantity   int not null,
  category_id int not null,

  foreign key (category_id) references category(id)
);

create table purchase (
  id          int auto_increment primary key,
  about_it    text,
  payment_way varchar(30) not null,
  product_id  int not null,
  user_id     int not null,

  foreign key (product_id) references product(id),
  foreign key (user_id) references user_account(id)
);