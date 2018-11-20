require "application_system_test_case"

class FridaModulesTest < ApplicationSystemTestCase
  setup do
    @frida_module = frida_modules(:one)
  end

  test "visiting the index" do
    visit frida_modules_url
    assert_selector "h1", text: "Frida Modules"
  end

  test "creating a Frida module" do
    visit frida_modules_url
    click_on "New Frida Module"

    fill_in "Content File", with: @frida_module.content_file
    fill_in "Description", with: @frida_module.description
    fill_in "Image", with: @frida_module.image
    fill_in "Limit Date", with: @frida_module.limit_date
    fill_in "Name", with: @frida_module.name
    fill_in "Video Link", with: @frida_module.video_link
    click_on "Create Frida module"

    assert_text "Frida module was successfully created"
    click_on "Back"
  end

  test "updating a Frida module" do
    visit frida_modules_url
    click_on "Edit", match: :first

    fill_in "Content File", with: @frida_module.content_file
    fill_in "Description", with: @frida_module.description
    fill_in "Image", with: @frida_module.image
    fill_in "Limit Date", with: @frida_module.limit_date
    fill_in "Name", with: @frida_module.name
    fill_in "Video Link", with: @frida_module.video_link
    click_on "Update Frida module"

    assert_text "Frida module was successfully updated"
    click_on "Back"
  end

  test "destroying a Frida module" do
    visit frida_modules_url
    page.accept_confirm do
      click_on "Destroy", match: :first
    end

    assert_text "Frida module was successfully destroyed"
  end
end
