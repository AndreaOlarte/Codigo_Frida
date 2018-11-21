# Código Frida

This README would normally document whatever steps are necessary to get the
application up and running.

Things you may want to cover:

* Ruby version: 2.5.1, rails 5.2.1

* System dependencies

* Configuration
Create a Postgresql user for the project `createuser -dlP codigofrida` and enter a password. 

* Database creation

* Database initialization

* How to run the test suite

* Services (job queues, cache servers, search engines, etc.)

* Deployment instructions

## Set up
First let's create the rails app with `rails new codigo_frida --skip-coffee --database=postgresql`.

Add `gem 'devise'` to the gemfile and run `bundle install`.

Don't forget to have the postgresql server running before attempting the next step, so enter `sudo service postgresql start` in the command line to start it if you haven't.

Once you make sure server is on, let's type `rake db:setup` for the db iniatilization. Some warnings are gonna show up because of the lack of the db schema file but that's normal, we're heading there. Then `rails db:migrate`

Add devise models for the user roles `rails g devise Frida` for the role for Frida, `rails g devise Mentor` for the role for Mentor and `rails g devise Leader` for the role for Leader and add the generated migrations `rails db:migrate`.

Add the views and controllers for those roles too:
`
# config/initializers/devise.rb
config.scoped_views = true
# run
rails g devise:views fridas
rails g devise:views mentors
rails g devise:views leaders
`
...

## Attributes for users
```
rails generate migration AddDetailsToFridas name:string last_name:string birthdate:date school:string phone:string avatar:string team_id:integer
```
```
rails generate migration AddDetailsToLeaders name:string last_name:string birthdate:date company:string phone:string avatar:string expertise:integer
```
```
rails generate migration AddDetailsToLeaders name:string last_name:string birthdate:date company:string phone:string avatar:string expertise:integer
```
`rails db:migrate`
### Add controllers
`rails generate devise:controllers leaders`