require 'test_helper'

class FridaModulesControllerTest < ActionDispatch::IntegrationTest
  setup do
    @frida_module = frida_modules(:one)
  end

  test "should get index" do
    get frida_modules_url
    assert_response :success
  end

  test "should get new" do
    get new_frida_module_url
    assert_response :success
  end

  test "should create frida_module" do
    assert_difference('FridaModule.count') do
      post frida_modules_url, params: { frida_module: { content_file: @frida_module.content_file, description: @frida_module.description, image: @frida_module.image, limit_date: @frida_module.limit_date, name: @frida_module.name, video_link: @frida_module.video_link } }
    end

    assert_redirected_to frida_module_url(FridaModule.last)
  end

  test "should show frida_module" do
    get frida_module_url(@frida_module)
    assert_response :success
  end

  test "should get edit" do
    get edit_frida_module_url(@frida_module)
    assert_response :success
  end

  test "should update frida_module" do
    patch frida_module_url(@frida_module), params: { frida_module: { content_file: @frida_module.content_file, description: @frida_module.description, image: @frida_module.image, limit_date: @frida_module.limit_date, name: @frida_module.name, video_link: @frida_module.video_link } }
    assert_redirected_to frida_module_url(@frida_module)
  end

  test "should destroy frida_module" do
    assert_difference('FridaModule.count', -1) do
      delete frida_module_url(@frida_module)
    end

    assert_redirected_to frida_modules_url
  end
end
