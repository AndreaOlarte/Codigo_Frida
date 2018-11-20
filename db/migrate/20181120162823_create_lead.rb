class CreateLead < ActiveRecord::Migration[5.2]
  def change
    create_table :leads do |t|
      t.string :user
      t.string :password
    end
  end
end
