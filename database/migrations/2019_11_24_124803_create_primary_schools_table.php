<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimarySchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->comment('id trường học')->nullable();
            $table->integer('type_school')->comment('Phân loại')->nullable();
            $table->integer('total_of_class')->comment('tổng số lớp')->default(0)->nullable();
            $table->integer('total_of_grade_1')->comment('tổng số lớp 1')->default(0)->nullable();
            $table->integer('total_of_grade_2')->comment('tổng số lớp 2')->default(0)->nullable();
            $table->integer('total_of_grade_3')->comment('tổng số lớp 3')->default(0)->nullable();
            $table->integer('total_of_grade_4')->comment('tổng số lớp 4')->default(0)->nullable();
            $table->integer('total_of_grade_5')->comment('tổng số lớp 5')->default(0)->nullable();

            $table->integer('total_of_student')->comment('tổng số học sinh')->default(0)->nullable();
            $table->integer('total_of_student_1')->comment('tổng số học sinh lớp 1')->default(0)->nullable();
            $table->integer('total_of_student_2')->comment('tổng số học sinh lớp 2')->default(0)->nullable();
            $table->integer('total_of_student_3')->comment('tổng số học sinh lớp 3')->default(0)->nullable();
            $table->integer('total_of_student_4')->comment('tổng số học sinh lớp 4')->default(0)->nullable();
            $table->integer('total_of_student_5')->comment('tổng số học sinh lớp 5')->default(0)->nullable();

            $table->integer('total_of_all_employees')->comment('tổng số nhân sự')->default(0)->nullable();
            $table->integer('total_of_manager')->comment('tổng số cán bộ quản lý')->default(0)->nullable();
            $table->integer('total_of_teacher')->comment('tổng số giáo viên')->default(0)->nullable();
            $table->integer('total_of_employees')->comment('tổng số nhân viên')->default(0)->nullable();

            $table->integer('total_classroom')->comment('tổng số phòng học')->default(0)->nullable();
            $table->integer('total_function_room')->comment('tổng số phòng chức năng')->default(0)->nullable();
            $table->integer('total_device_full')->comment('tổng số trang thiết bị tối thiểu đầy đủ')->default(0)->nullable();
            $table->integer('total_device_not_full')->comment('tổng số trang thiết bị tối thiểu không đầy đủ')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('primary_schools');
    }
}
