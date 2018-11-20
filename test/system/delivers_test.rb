require "application_system_test_case"

class DeliversTest < ApplicationSystemTestCase
  setup do
    @deliver = delivers(:one)
  end

  test "visiting the index" do
    visit delivers_url
    assert_selector "h1", text: "Delivers"
  end

  test "creating a Deliver" do
    visit delivers_url
    click_on "New Deliver"

    fill_in "File", with: @deliver.file
    fill_in "Grade", with: @deliver.grade
    fill_in "Id Module", with: @deliver.id_module
    fill_in "Id Team", with: @deliver.id_team
    click_on "Create Deliver"

    assert_text "Deliver was successfully created"
    click_on "Back"
  end

  test "updating a Deliver" do
    visit delivers_url
    click_on "Edit", match: :first

    fill_in "File", with: @deliver.file
    fill_in "Grade", with: @deliver.grade
    fill_in "Id Module", with: @deliver.id_module
    fill_in "Id Team", with: @deliver.id_team
    click_on "Update Deliver"

    assert_text "Deliver was successfully updated"
    click_on "Back"
  end

  test "destroying a Deliver" do
    visit delivers_url
    page.accept_confirm do
      click_on "Destroy", match: :first
    end

    assert_text "Deliver was successfully destroyed"
  end
end
