class FridaModulesController < ApplicationController
  before_action :set_frida_module, only: [:show, :edit, :update, :destroy]

  # GET /frida_modules
  # GET /frida_modules.json
  def index
    @frida_modules = FridaModule.all
  end

  # GET /frida_modules/1
  # GET /frida_modules/1.json
  def show
    if current_frida
      @team = current_frida.team
      @deliver = Deliver.new
  end

  # GET /frida_modules/new
  def new
    @frida_module = FridaModule.new
  end

  # GET /frida_modules/1/edit
  def edit
  end

  # POST /frida_modules
  # POST /frida_modules.json
  def create
    @frida_module = FridaModule.new(frida_module_params)

    respond_to do |format|
      if @frida_module.save
        format.html { redirect_to @frida_module, notice: 'Frida module was successfully created.' }
        format.json { render :show, status: :created, location: @frida_module }
      else
        format.html { render :new }
        format.json { render json: @frida_module.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /frida_modules/1
  # PATCH/PUT /frida_modules/1.json
  def update
    respond_to do |format|
      if @frida_module.update(frida_module_params)
        format.html { redirect_to @frida_module, notice: 'Frida module was successfully updated.' }
        format.json { render :show, status: :ok, location: @frida_module }
      else
        format.html { render :edit }
        format.json { render json: @frida_module.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /frida_modules/1
  # DELETE /frida_modules/1.json
  def destroy
    @frida_module.destroy
    respond_to do |format|
      format.html { redirect_to frida_modules_url, notice: 'Frida module was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_frida_module
      @frida_module = FridaModule.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def frida_module_params
      params.require(:frida_module).permit(:name, :description, :video_link, :image, :content_file, :limit_date)
    end
end
