class AddDetailsToMentors < ActiveRecord::Migration[5.2]
  def change
    add_column :mentors, :name, :string
    add_column :mentors, :last_name, :string
    add_column :mentors, :birthdate, :date
    add_column :mentors, :company, :string
    add_column :mentors, :phone, :string
    add_column :mentors, :avatar, :string
    add_column :mentors, :expertise, :integer
  end
end
