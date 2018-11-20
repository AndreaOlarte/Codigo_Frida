class CreateDelivers < ActiveRecord::Migration[5.2]
  def change
    create_table :delivers do |t|
      t.integer :id_module
      t.string :file
      t.integer :id_team
      t.integer :grade

      t.timestamps
    end
  end
end
