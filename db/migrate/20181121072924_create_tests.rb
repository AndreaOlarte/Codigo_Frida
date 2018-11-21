class CreateTests < ActiveRecord::Migration[5.2]
  def change
    create_table :tests do |t|
      t.integer :id_module
      t.string :test_link

      t.timestamps
    end
  end
end
