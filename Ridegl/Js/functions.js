function cube(image, Xsize, Ysize, Zsize, Xpostion, Yposition, Zposition,rotation){
  var texture = new THREE.TextureLoader().load(image);
  var material = new THREE.MeshPhongMaterial( {map : texture});
  var mesh = new THREE.Mesh(new THREE.BoxGeometry(Xsize, Ysize, Zsize), material);
  mesh.position.set(Xpostion, Yposition, Zposition);
  mesh.rotation.y=rotation;
  scene.add(mesh);
}
