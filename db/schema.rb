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

ActiveRecord::Schema.define(version: 2018_12_04_092735) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "active_storage_attachments", force: :cascade do |t|
    t.string "name", null: false
    t.string "record_type", null: false
    t.bigint "record_id", null: false
    t.bigint "blob_id", null: false
    t.datetime "created_at", null: false
    t.index ["blob_id"], name: "index_active_storage_attachments_on_blob_id"
    t.index ["record_type", "record_id", "name", "blob_id"], name: "index_active_storage_attachments_uniqueness", unique: true
  end

  create_table "active_storage_blobs", force: :cascade do |t|
    t.string "key", null: false
    t.string "filename", null: false
    t.string "content_type"
    t.text "metadata"
    t.bigint "byte_size", null: false
    t.string "checksum", null: false
    t.datetime "created_at", null: false
    t.index ["key"], name: "index_active_storage_blobs_on_key", unique: true
  end

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
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
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

  create_table "fridas", force: :cascade do |t|
    t.string "email", default: "", null: false
    t.string "encrypted_password", default: "", null: false
    t.string "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string "name"
    t.string "last_name"
    t.date "birthdate"
    t.string "school"
    t.string "phone"
    t.string "avatar"
    t.integer "team_id"
    t.index ["email"], name: "index_fridas_on_email", unique: true
    t.index ["reset_password_token"], name: "index_fridas_on_reset_password_token", unique: true
  end

  create_table "leaders", force: :cascade do |t|
    t.string "email", default: "", null: false
    t.string "encrypted_password", default: "", null: false
    t.string "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string "name"
    t.string "last_name"
    t.date "birthdate"
    t.string "company"
    t.string "phone"
    t.string "avatar"
    t.integer "expertise"
    t.index ["email"], name: "index_leaders_on_email", unique: true
    t.index ["reset_password_token"], name: "index_leaders_on_reset_password_token", unique: true
  end

  create_table "leads", force: :cascade do |t|
    t.string "user"
    t.string "password"
  end

  create_table "mentors", force: :cascade do |t|
    t.string "email", default: "", null: false
    t.string "encrypted_password", default: "", null: false
    t.string "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string "name"
    t.string "last_name"
    t.date "birthdate"
    t.string "company"
    t.string "phone"
    t.string "avatar"
    t.integer "expertise"
    t.index ["email"], name: "index_mentors_on_email", unique: true
    t.index ["reset_password_token"], name: "index_mentors_on_reset_password_token", unique: true
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
    t.integer "leader_id"
  end

  create_table "tests", force: :cascade do |t|
    t.integer "id_module"
    t.string "test_link"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  create_table "users", force: :cascade do |t|
    t.integer "role"
    t.string "name"
    t.string "last_name"
    t.date "birthdate"
    t.string "school"
    t.string "phone"
    t.string "avatar"
    t.integer "team_id"
    t.string "company"
    t.integer "expertise"
    t.string "email", default: "", null: false
    t.string "encrypted_password", default: "", null: false
    t.string "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.index ["email"], name: "index_users_on_email", unique: true
    t.index ["reset_password_token"], name: "index_users_on_reset_password_token", unique: true
  end

end
