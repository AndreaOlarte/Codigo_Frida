class CreateFridaModules < ActiveRecord::Migration[5.2]
  def change
    create_table :frida_modules do |t|
      t.string :name
      t.string :description
      t.string :video_link
      t.string :image
      t.string :content_file
      t.date :limit_date

      t.timestamps
    end
  end
end
