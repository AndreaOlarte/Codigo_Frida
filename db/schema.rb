# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 2018_11_20_202905) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "delivers", force: :cascade do |t|
    t.integer "id_module"
    t.string "file"
    t.integer "id_team"
    t.integer "grade"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "feedbacks", force: :cascade do |t|
    t.integer "id_autor"
    t.date "date"
    t.string "comment"
    t.integer "id_deliver"
  end

  create_table "frida_modules", force: :cascade do |t|
    t.string "name"
    t.string "description"
    t.string "video_link"
    t.string "image"
    t.string "content_file"
    t.date "limit_date"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "leads", force: :cascade do |t|
    t.string "user"
    t.string "password"
  end

  create_table "teams", force: :cascade do |t|
    t.string "name"
    t.integer "id_mentor"
    t.integer "id_mentor2"
    t.string "code"
    t.integer "level"
    t.integer "score"
    t.string "image"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "tests", force: :cascade do |t|
    t.integer "id_module"
    t.string "test_link"
  end

end
