    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('student_subjects', function (Blueprint $table) {
                $table->id('studSubID');
                
                $table->string('studentId', 20);
                $table->foreign('studentId')->references('id')->on('student_infos')->onDelete('cascade');

                $table->string('subjectsId', 20);
                $table->foreign('subjectsId')->references('subjectId')->on('subjects')->onDelete('cascade');

                $table->string('grade')->nullable();
                
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('student_subjects');
        }
    };
