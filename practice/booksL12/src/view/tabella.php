<h1><?= TITOLO ?></h1>
<h2>Books</h2>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Image</th>
            
        </tr>
    </thead>
    <tbody>
        <!-- Here dynamic content -->
        <!-- this tr has to be repeated foreach $auto in $automobili -->
         <?php foreach($books as $book): ?>
        
        
        <tr>
            <td><?= $book->title ?></td>
            <td><?= $book->author ?></td>
            <td><?= $book->genre ?></td>
            <td><?= $book->image ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>