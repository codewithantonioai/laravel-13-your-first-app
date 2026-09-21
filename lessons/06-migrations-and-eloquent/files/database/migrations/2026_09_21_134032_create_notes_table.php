public function up(): void
{
    Schema::create('notes', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content')->nullable();
        $table->timestamps();
    });
}
