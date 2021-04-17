class Book {
    constructor(id, title, author, pages, read_pages, rating) {
        this.id = id;
        this.title = title;
        this.author = author;
        this.pages = pages;
        this.read_pages = read_pages;
        this.rating = rating;
    }
}

var bookList = [];

function submiting() {
    showTable();
    var title = document.getElementById("title").value;
    var author = document.getElementById('author').value;
    var pages = document.getElementById('pages').value;
    var read_pages = document.getElementById('read').value;
    var rating = checkRating();
    var book = new Book(bookList.length, title, author, pages, read_pages, rating);
    bookList.push(book);
    resetFields();
    console.log(book);
    addLine(book);
}

function checkRating(){
    if(document.getElementById('star5').checked){
        return 5;
    }
    if(document.getElementById('star4').checked){
        return 4;
    }
    if(document.getElementById('star3').checked){
        return 3;
    }
    if(document.getElementById('star2').checked){
        return 2;
    }
    if(document.getElementById('star1').checked){
        return 1;
    } else {
        return 0;
    }
}


function checkNewRating(){
    if(document.getElementById('pstar5').checked){
        return 5;
    }
    if(document.getElementById('pstar4').checked){
        return 4;
    }
    if(document.getElementById('pstar3').checked){
        return 3;
    }
    if(document.getElementById('pstar2').checked){
        return 2;
    }
    if(document.getElementById('pstar1').checked){
        return 1;
    } else {
        return 0;
    }
}

function resetFields() {
    document.getElementById("title").value = null;
    document.getElementById('author').value = null;
    document.getElementById('pages').value = null;
    document.getElementById('read').value = null;
}

function addLine(book) {
    var div = document.createElement('div');
    div.setAttribute('id', 'line' + book.id);
    div.innerHTML = '<table><tr><td id="rtitle">'+book.title+'</div></td><td id="rauthor">'+book.author+'</div></td><td id="rpages">'+(book.pages - book.read_pages)+'</div></td><td id="ratingstar"><span class="yellow">★</span>: '+book.rating+'/5<button onclick="openForm(line'+book.id+')" class="btn"><i class="far fa-edit"></i></button><button onclick="deleted(line'+book.id+')" class="btn"><i class="far fa-trash-alt"></i></button></div></td></tr></table>';
    document.getElementById("tableContent").appendChild(div);
}

function deleted(line) {
    var row = line;
    row.parentNode.removeChild(row);

}

function showTable() {
    document.getElementById("tableHeader").style.display = "block";
}
function openForm(line) {
    var row = line;
    var id = row.id.substring(4);
    var book = bookList[id];
    document.getElementById("myForm").style.display = "block";
    document.getElementById("titlep").value = book.title;
    document.getElementById('authorp').value = book.author;
    document.getElementById('pagesp').value = book.pages;
    document.getElementById('readp').value = book.read_pages;
    document.getElementById('lineNumber').value = book.id;
    document.getElementById('pstar'+book.rating).checked = true;
    toggle(true);
  }
  
  function saveChanges() {
    var title = document.getElementById("titlep").value;
    var author = document.getElementById('authorp').value;
    var pages = document.getElementById('pagesp').value;
    var read_pages = document.getElementById('readp').value;
    var rating = checkNewRating();
    var id = document.getElementById("lineNumber").value;
    var book = new Book(id, title, author, pages, read_pages, rating);
    var line = document.getElementById('line'+ book.id);
    bookList[book.id] = book;
    line.innerHTML = '<table><tr><td id="rtitle">'+book.title+'</div></td><td id="rauthor">'+book.author+'</div></td><td id="rpages">'+(book.pages - book.read_pages)+'</div></td><td id="ratingstar"><span class="yellow">★</span>: '+book.rating+'/5<button onclick="openForm(line'+book.id+')" class="btn"><i class="far fa-edit"></i></button><button onclick="deleted(line'+book.id+')" class="btn"><i class="far fa-trash-alt"></i></button></div></td></tr></table>';
    console.log(book);
    }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
    toggle(false);

  }

  function toggle(bool) {
    var blur = document.getElementById('container');
      if (bool == true) {
      blur.classList.toggle('active');
      } else {
        blur.classList.remove('active');
      }
  }



