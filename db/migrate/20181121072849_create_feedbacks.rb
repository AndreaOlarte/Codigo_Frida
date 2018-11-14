class CreateFeedbacks < ActiveRecord::Migration[5.2]
  def change
    create_table :feedbacks do |t|
      t.integer :id_autor
      t.date :date
      t.string :comment
      t.integer :id_deliver

      t.timestamps
    end
  end
end
