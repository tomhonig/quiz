<div class="question">
    <div class="quiz-image">
        <?php print $image; ?>
    </div>
    
     <div class="progress">
        <?php print t('Question') . ': ' . $step . '/' . $count_questions; ?>
    </div>
    
    <div class="quiz-question">
        <h2><?php print $question ?> </h2>
    </div>
    
    <div class="quiz-options">
    <?php print $options; ?>
    </div>
    
    <?php print $actions; ?>
    <?php print $rest ?>
</div>