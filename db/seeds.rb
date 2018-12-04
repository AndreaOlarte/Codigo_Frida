# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)

leader = Leader.create([{name: 'Eduardo', last_name: 'Mtz', email: 'edumartinez@ucol.mx', 
    birthdate: '2018-12-04', encrypted_password: 'hola1', company: 'UCOL', phone: 0000000000, 
    expertise: 'Science'}])