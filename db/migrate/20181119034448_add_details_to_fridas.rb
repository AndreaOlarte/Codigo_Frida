class AddDetailsToFridas < ActiveRecord::Migration[5.2]
  def change
    add_column :fridas, :name, :string
    add_column :fridas, :last_name, :string
    add_column :fridas, :birthdate, :date
    add_column :fridas, :school, :string
    add_column :fridas, :phone, :string
    add_column :fridas, :avatar, :string
    add_column :fridas, :team_id, :integer
  end
end
