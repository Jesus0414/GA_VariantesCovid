<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Variant</title>
</head>
<body>
    <h1>New Variant</h1>
    <form method="POST" action="<?php echo e(route('variantes.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label>Lineage</label>
            <input type="text" name="lineage" id="lineage">
        </div>
        <div>
            <label>Common countries</label>
            <textarea rows="5" name="common_countries" id="common_countries"></textarea>
        </div>
        <div>
            <label>Earliest date</label>
            <input type="date" name="earliest_date" id="earliest_date">
        </div>
        <div>
            <label>Designted number</label>
            <input type="text" name="designated_number" id="designated_number">
        </div>
        <div>
            <label>Assigned number</label>
            <input type="text" name="assigned_number" id="assigned_number">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <div>
            <label>WHO name</label>
            <input type="text" name="who_name" id="who_name">
        </div>
        <div>
            <label>Evidence</label>
            <input type="file" name="evidence" id="evidence">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>
<?php /**PATH /Users/ulsa/Desktop/servicios_variantes_covid2022-master/resources/views/variantes/create.blade.php ENDPATH**/ ?>