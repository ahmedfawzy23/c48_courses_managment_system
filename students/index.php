<?php

require_once __DIR__ . '/../includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 fw-bold text-dark mb-1">Student Management</h2>
        <p class="text-secondary small mb-0">View, register, and manage enrolled students.</p>
    </div>
    <a href="<?= BASE_URL ?>/students/create.php" class="btn btn-primary shadow-sm">
        <i class="bi bi-person-plus-fill me-1"></i> Add Student
    </a>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="fw-semibold text-dark">
            <i class="bi bi-people-fill me-2 text-primary"></i> All Students (<?= $student->count() ?>)
        </span>
    </div>
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th style="width: 70px;">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Enrolled Courses</th>
                    <th class="text-end" style="width: 180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            No students registered yet. Click "Add Student" to create the first record.
                        </td>
                    </tr> -->
                <?php foreach ($student->all() as $studentData): ?>
                    <tr>
                        <td class="text-secondary fw-semibold">#<?= $studentData->id ?></td>
                        <td class="fw-semibold text-dark">
                            <a href="students/show.php?id=1" class="text-dark text-decoration-none hover-primary">
                                <?= $studentData->name ?>
                            </a>
                        </td>
                        <td><?= $studentData->email ?></td>
                        <td><?= $studentData->phone ?></td>
                        <td>
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle badge-count">
                                <i class="bi bi-journal-bookmark me-1"></i>
                                <?= $studentData->enrolled_courses_count ?> Courses
                            </span>
                        </td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="<?= BASE_URL ?>/students/show.php?id=<?= $studentData->id ?>"
                                    class="btn btn-outline-info"
                                    title="View Details">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="<?= BASE_URL ?>/students/edit.php?id=<?= $studentData->id ?>"
                                    class="btn btn-outline-warning"
                                    title="Edit Student">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="<?= BASE_URL ?>/students/delete.php?id=<?= $studentData->id ?>"
                                    class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure you want to delete student &quot;<?= $studentData->name ?>&quot;? All their enrollments will also be removed.');"
                                    title="Delete Student">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>