

// Creating tables
Table role {
  id int [pk, increment] // auto-increment
  name varchar
}

Table user {
  id int [pk, increment]
  fullname varchar
  email varchar
  phone_number varchar
  address varchar
  password varchar
  created_at datetime
  update_at datetime
  role_id int
 }

ref: role.id > user.role_id
Table category {
  id int [pk, increment]
  name varchar
} 
Table product {
  id int [pk, increment]
  category_id int
  title varchar
  price int
  discount_price int
  thumbnail varchar
  description longtext
  created_at datetime
  update_at datetime
  status int
  
}
ref: category.id > product.category_id
Table gallery {
  id int
  product_id int
  thumbnail varchar
}
ref: gallery.product_id > product.id 
Table feedback {
  id int [pk, increment]
  firstname varchar
  lastname varchar
  email varchar
  phone_number varchar
  subject_name varchar
  note varchar
  product_id int
}
ref: feedback.product_id > product.id
Table order{
  id int [pk,increment]
  user_id int
  note varchar
  order_date datetime
  status int
  total_money int
}
ref: order.user_id > user.id
Table order_detail{
  id int [pk,increment]
  order_id int
  product_id int
  num int
  total_money int 
  
}
ref: order.id - order_detail.order_id
ref: order_detail.product_id > product.id

Table user_product{
  id int
  user_id int
  product_id int
}
ref: user_product.user_id - user.id
ref: user_product.product_id < product.id

