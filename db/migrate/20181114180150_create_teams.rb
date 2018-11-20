class CreateTeams < ActiveRecord::Migration[5.2]
  def change
    create_table :teams do |t|
      t.string :name
      t.integer :id_mentor
      t.integer :id_mentor2
      t.string :code
      t.integer :level
      t.integer :score
      t.string :image

      t.timestamps
    end
  end
end
