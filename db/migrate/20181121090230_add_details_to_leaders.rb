class AddDetailsToLeaders < ActiveRecord::Migration[5.2]
  def change
    add_column :leaders, :name, :string
    add_column :leaders, :last_name, :string
    add_column :leaders, :birthdate, :date
    add_column :leaders, :company, :string
    add_column :leaders, :phone, :string
    add_column :leaders, :avatar, :string
    add_column :leaders, :expertise, :integer
  end
end
