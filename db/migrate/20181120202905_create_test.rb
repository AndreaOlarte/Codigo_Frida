class CreateTest < ActiveRecord::Migration[5.2]
  def change
    create_table :tests do |t|
      t.integer :id_module
      t.string :test_link
    end
  end
end
