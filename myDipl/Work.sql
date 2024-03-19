drop database if exists Workshop;
create database Workshop;

use Workshop;

create table Users(
id_us int auto_increment primary key,
nam varchar(30) not null,
numb long not null,
mail varchar(30) not null,
pass varchar(30) not null
);

create table Product(
id_prod int auto_increment primary key,
prod_name varchar(40) not null,
price int not null,
specif varchar(800) not null,
photo varchar(30) not null,
kat varchar(30) not null
);

create table Orders(
id_ord int auto_increment primary key,
id_us int not null,
id_prod int not null,
dat_ord varchar(30) not null,
total_price int not null,
is_done bool not null,
count_prod int not null,
foreign key (id_us) references Users(id_us) on update cascade on delete cascade,
foreign key (id_prod) references Product(id_prod) on update cascade on delete cascade
);

create table ShopCart(
id_c  int auto_increment primary key,
id_us int,
id_prod int,
sum_price int,
foreign key (id_us) references Users(id_us) on update cascade on delete cascade,
foreign key (id_prod) references Product(id_prod) on update cascade on delete cascade
);

insert into Users values(default,"Elena",80296802013,"ekragel@bk.ru","eva2002");
delete from Users where id_us=2;
insert into Product values(default,"Декоративный мост",4200,"Мосты являются незаменимыми на заливаемых участках, где требуется проложить маршрут от постройки или сделать переправу через овраг.
","most.png","Maf");
insert into Product values(default,"Кованная беседка",8000,"Кованные беседки не только придадут конструкциям красивый вид, но и защитят металл от атмосферных воздействий.
","besed.jpg","Maf");
insert into Product values(default,"Велопарковка",1200," Велопарковка занимает минимум места и обеспечивает сохранность и удобство хранения вашего транспортного средства.","velo2.jpg","Maf");
insert into Product values(default,"Декоративное ограждение",4000,"bla","ograzh.jpg","Maf");
insert into Product values(default,"Декоративная карета",7200,"bla","karet.jpg","Maf");
insert into Product values(default,"Кованные качели",5000,"bla","kacheli.jpg","Maf");

insert into Product values(default,"Тумба под цветы",1000,"bla","klumb.jpg","Sad");
insert into Product values(default,"Урна",1000,"bla","yrna.jpg","Sad");
insert into Product values(default,"Скамья со спинкой",2000,"bla","spinka.jpg","Sad");
insert into Product values(default,"Многоуровневая скамья",2500,"bla","sk.jpg","Sad");
insert into Product values(default,"Скамья с боковыми столиками",2700,"bla","pod.jpg","Sad");
insert into Product values(default,"Садовая группа",4700,"bla","sadov.jpg","Sad");

insert into Product values(default,"Светодиодная фигура оленя",7700,"bla","olen.jpg","Top");
insert into Product values(default,"Светодиодная фигура медведя",8000,"bla","med.jpg","Top");
insert into Product values(default,"Гуппа светодиодных фигур",8000,"bla","sneg.jpg","Top");
insert into Product values(default,"Объемные светодиодные цифры",2500,"bla","2022.jpg","Top");
insert into Product values(default,"Светодиодные консоли",2000,"bla","kons.jpg","Top");
insert into Product values(default,"Группа из топиарных велосипедистов",5700,"bla","topiar.jpg","Top");
insert into Product values(default,"Топиарная фигура бабочки",6700,"bla","topiar2.jpg","Top");
insert into Product values(default,"Топиарная фигура вазы с тюльпанами",7700,"bla","topiar3.jpg","Top");
insert into Product values(default,"Топиарная фигура льва",7500,"bla","lev.jpg","Top");

insert into ShopCart values(default,1,4,455);
insert into ShopCart values(default,1,5,455);

select * from Product inner join ShopCart on Product.id_prod=ShopCart.id_prod;

select* from Users;
select* from Product;
select* from Orders;

