let xoa=document.querySelector('.xoa');
let check=alert('bạn có muốn xóa không');
if (check) {
    let link="?act=deletedm&iddm=<?= $list['id_dm'] ?>";
xoa.setAttribute('href',link);
}

// href="?act=deletedm&iddm=<?= $list['id_dm'] ?>"
